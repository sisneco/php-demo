<?php
class FormData
{
    // field
    public $text = "";
    public $year = 0;
    public $month = 0;
    public $day = 0;


    const MIN_YEAR = 0;
    const MAX_YEAR = 9999;


    public function __construct($post)
    {
        if (isset($post["todo-text"])) {
            $this->text = $post["todo-text"];
        }

        if (isset($post["year"])) {
            $this->year = $post["year"];
        }

        if (isset($post["month"])) {
            $this->month = $post["month"];
        }

        if (isset($post["day"])) {
            $this->day = $post["day"];
        }
    }

    public function createDate()
    {
        return strtotime($this->year . "/" . $this->month . "/" . $this->day);
    }

    public function hasErrorProperty()
    {
        if ($this->hasErrorText()) {
            return true;
        }
    }

    /**
     * Todo-textにエラーがあるか判定
     */
    private function hasErrorText(): bool
    {

        if ($this->text === "") {
            return true;
        }

        return false;
    }

    /**
     * 年チェック
     */
    private function hasErrorYear(): bool
    {

        // 数値チェック
        if (!is_numeric($this->year)) {
            return true;
        }

        // 範囲チェック
        if (self::MIN_YEAR <= $this->year && $this->year <= self::MAX_YEAR) {
            return true;
        }
    }
}
