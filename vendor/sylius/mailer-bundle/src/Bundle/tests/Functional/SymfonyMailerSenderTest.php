<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Bundle\MailerBundle\tests\Functional;

use Sylius\Component\Mailer\Sender\SenderInterface;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Bundle\FrameworkBundle\Test\MailerAssertionsTrait;

final class SymfonyMailerSenderTest extends KernelTestCase
{
    use MailerAssertionsTrait;

    private SenderInterface $sender;

    protected function setUp(): void
    {
        self::bootKernel(['environment' => 'test_with_symfony_mailer']);
        $container = self::getContainer();

        $this->sender = $container->get('sylius.email_sender');
    }

    /** @test */
    public function it_sends_email_rendered_with_given_template(): void
    {
        $this->sender->send('test_email', ['test@example.com']);

        $this->assertEmailCount(1);

        $email = $this->getMailerMessage();
        $this->assertEmailHtmlBodyContains($email, 'Test email body');
        $this->assertEmailHasHeader($email, 'subject', 'Test email subject');
    }

    /** @test */
    public function it_sends_email_rendered_with_given_template_and_data(): void
    {
        $this->sender->send('test_email_with_data', ['test@example.com'], ['data' => 'Test data']);

        $this->assertEmailCount(1);

        $email = $this->getMailerMessage();
        $this->assertEmailHtmlBodyContains($email, 'Test email body. Data: Test data.');
        $this->assertEmailHasHeader($email, 'subject', 'Test email with data subject');
    }

    /** @test */
    public function it_sends_email_multiple_messages(): void
    {
        $this->sender->send('test_email', ['test@example.com']);
        $this->sender->send('test_email_with_data', ['test@example.com'], ['data' => 'Test data']);

        $this->assertEmailCount(2);

        $firstEmail = $this->getMailerMessage(0);
        $secondEmail = $this->getMailerMessage(1);

        $this->assertEmailHtmlBodyContains($firstEmail, 'Test email body');
        $this->assertEmailHasHeader($firstEmail, 'subject', 'Test email subject');
        $this->assertEmailHtmlBodyContains($secondEmail, 'Test email body. Data: Test data.');
        $this->assertEmailHasHeader($secondEmail, 'subject', 'Test email with data subject');
    }
}
