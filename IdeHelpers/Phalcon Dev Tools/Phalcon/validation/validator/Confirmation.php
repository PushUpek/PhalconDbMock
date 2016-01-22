<?php

namespace Phalcon\Validation\Validator;

/**
 * Phalcon\Validation\Validator\Confirmation
 * Checks that two values have the same value
 * <code>
 * use Phalcon\Validation\Validator\Confirmation;
 * $validator->add('password', new Confirmation(array(
 * 'message' => 'Password doesn\'t match confirmation',
 * 'with' => 'confirmPassword'
 * )));
 * </code>
 */
class Confirmation extends \Phalcon\Validation\Validator {

    /**
     * Executes the validation
     *
     * @param mixed $validation
     * @param string $field
     * @return bool
     */
    public function validate(\Phalcon\Validation $validation, $field) {
    }

    /**
     * Compare strings
     *
     * @param string $a
     * @param string $b
     * @return bool
     */
    protected final function compare($a, $b) {
    }

}
