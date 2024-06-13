<?php

interface ValidatorInterface
{
    public function validate($value,$key, $rules, $messages);
    public function getError(): array;

    public function validationStatus(): bool;
}