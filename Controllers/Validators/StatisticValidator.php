<?php
namespace Controllers\Validators;
include_once 'system/Validator.php';

class StatisticValidator extends \Validator
{

    public function validateRequest($data): void
    {
        $this->validate($data, 'ekatte', ['number', 'max:5'], [
            'number' => 'Value need to be number',
            'max' => 'Value need to max 5 characters']);

        $this->validate($data, 'tvm', ['text'], [
            'text' => 'Value need to be text']);

        $this->validate($data, 'name', ['text'], [
            'text' => 'Value need to be text']);

        $this->validate($data, 'name_en', ['text'], [
            'text' => 'Value need to be text']);

        $this->validate($data, 'code_area', ['text', 'max:4', 'min:2'], [
            'text' => 'Value need to be text',
            'max' => 'Value need to max 4 characters',
            'min' => 'Value need to min 3 characters'
            ]);
        $this->validate($data, 'name_area', ['text'], [
            'text' => 'Value need to be text']);

        $this->validate($data, 'municapility', ['text'], [
            'text' => 'Value need to be text']);

        $this->validate($data, 'name_municapility', ['text'], [
            'text' => 'Value need to be text']);

        $this->validate($data, 'townhall', ['text'], [
            'text' => 'Value need to be text']);

        $this->validate($data, 'nuts1', ['text'], [
            'text' => 'Value need to be text']);

        $this->validate($data, 'nuts2', ['text'], [
            'text' => 'Value need to be text']);

        $this->validate($data, 'nuts3', ['text'], [
            'text' => 'Value need to be text']);

        $this->validate($data, 'kind', ['number'], [
            'number' => 'Value need to be number']);

        $this->validate($data, 'category', ['number'], [
            'number' => 'Value need to be number']);

        $this->validate($data, 'altitude', ['number'], [
            'number' => 'Value need to be number']);

        $this->validate($data, 'document', ['number'], [
            'number' => 'Value need to be number']);

    }



}