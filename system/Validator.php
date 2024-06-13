<?php
include_once 'system/ValidatorInterface.php';

class Validator implements ValidatorInterface
{
    protected $error = [];

    protected $dataKey;

    protected $messages = [];
    public function getError(): array
    {
        return $this->error;
    }

    protected function error($type): void
    {
        if (is_array($this->messages)) {
            foreach ($this->messages as $key => $value) {
                if ($type == $key){
                    $this->error[$this->dataKey][$key] = $value;
                }
            }
        } else {
            //this case is just in case normally it's not be used
            $this->error[] = $this->messages;
        }

    }



    public function validate($data,$key,  $rules, $messages)
    {
        $this->messages = $messages;
        $this->dataKey = $key;
        foreach ($rules as $field => $rule) {
            if ($rule == 'number') {
                $this->isNumeric($data[$key], $messages);
            }elseif (preg_match_all('/^max:(\d+)$/', $rule, $matches)) {
                if (isset($matches[1][0])) {
                    $this->maxNumber($data[$key], $matches[1][0], $messages);
                }
            }elseif (preg_match_all('/^min:(\d+)$/', $rule, $matches)) {
                if (isset($matches[1][0])) {
                    $this->minNumber($data[$key], $matches[1][0]);
                }
            }elseif ($rule == 'text') {
                $this->isString($data[$key]);
            }
        }

        // TODO: Implement validate() method.
    }

    public function maxNumber($data, $number)
    {
        if ($data != '') {
            if (strlen($data) < $number) {
                return true;
            } else {

                $this->error('max');
                return false;
            }
        }
        return true;
    }
    public function minNumber($data, $number)
    {
        if ($data != '') {
            if (strlen($data) > $number) {
                return true;
            } else {
                $this->error('min');
                return false;
            }
        }
    }

    protected function isNumeric($data)
    {
        if ($data != ''){
            if (is_numeric($data)) {
                return true;
            } else {
                $this->error('integer');
                return false;
            }
        }
        return true;
    }

    protected function isString($data)
    {
        if ($data != '') {
            if (is_string($data)) {
                return true;
            } else {
                $this->error('text');
                return false;
            }
        }
        return true;
    }

    public function validationStatus(): bool
    {
        if (count($this->getError()) == 0){
            return true;
        }
        return false;
    }
}