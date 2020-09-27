<?php namespace CameronSmith\PhalconPHPMicro\Validators\Users;

use Phalcon\Validation;
use Phalcon\Validation\Validator\PresenceOf;

/**
 * Class Email
 *
 * @package CameronSmith\PhalconPHPMicro\Validators
 */
class Create extends Validation
{
    /**
     * Validate
     */
    public function initialize()
    {
        $this
            ->add(
                'email',
                new Validation\Validator\Email([
                    'message' => 'The e-mail is not valid.',
                ])
            )
            ->add(
                'name',
                new PresenceOf([
                    'message' => 'Your name is required.'
                ])
            );
    }
}
