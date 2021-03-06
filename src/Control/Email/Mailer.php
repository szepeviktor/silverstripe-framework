<?php declare(strict_types = 1);

namespace SilverStripe\Control\Email;

interface Mailer
{

    /**
     * @param Email $email
     * @return bool
     */
    public function send($email);
}
