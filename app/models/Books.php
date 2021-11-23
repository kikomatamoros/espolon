<?php
class Books extends Model
{
    protected $fillable = ['name', 'lastname', 'email','room','arrival','departure','adults','childs'];
    public function rules():array
    {
        return $rules = array(
            'name' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'room' => [self::RULE_REQUIRED],
            'arrival' => [self::RULE_REQUIRED],
            'departure' => [self::RULE_REQUIRED],
            'adults' => [self::RULE_REQUIRED],
            'childs' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL]
        );
    }
    public function tableName():string
    {
        return 'books';
    }
    public function attributes():array
    {
        return ['name', 'lastname', 'email','room','arrival','departure','adults','childs'];
    }
}