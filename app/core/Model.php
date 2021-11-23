<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
    abstract class Model extends Eloquent{
        
        public const RULE_REQUIRED='required'; public const RULE_EMAIL='email';
        public const RULE_MIN='min';
        public const RULE_MAX='max';
        public const RULE_MATCH='match';
        public  $errors=[];
    
        abstract public function rules():array;
    
        public function loadData($data) {
            $attributes=$this->attributes();
            foreach ($data as $key => $value){
                if(array_search($key, $attributes, true) !==false){
                     $this->setAttribute("$key", $value);
                    }
                }
                return true;
            }

        public function validate(){
                foreach ($this->rules() as $attribute => $rules) {
                    $value=$this->{$attribute};
                    if (isset($this->{$attribute})) {
                        foreach ($rules as $rule) {
                            $ruleName=$rule;
                            if (!is_string($ruleName)) {
                                $ruleName=$rule[0];
                            }
                        }
                        if ($ruleName===self::RULE_REQUIRED && !$value) {
                            $this->addError($attribute, self::RULE_REQUIRED);
                        }
                        if ($ruleName===self::RULE_MATCH && $value !== $this->{$rule['match']}){
                            $this->addError($attribute, self::RULE_MATCH, $rule);
                        }
                    }
                }
                return empty($this->errors);
            }
          
            public function addError(string $attribute, string $rule, $params=[]){
                $message= $this->errorMessages()[$rule]??'';
                foreach ($params as $key => $value){
                    $message=str_replace("{{$key}}", $value, $message);
                }
                $this->errors[$attribute] []=$message;
            }
            public function errorMessages(){
                return [
                    self:: RULE_REQUIRED=>'This field is required',
                    self:: RULE_EMAIL=>'This field must be a valid email',
                    self::RULE_MIN=>' The min length must be {min}',
                    self:: RULE_MAX=> 'The max length must be {max}',
                    self::RULE_MATCH=> 'There is no match with {match}',
                ];
        }
    }
?>