<?php
class Button extends BaseButton
{
    public function render(): string
    {
        return sprintf("<button type='%s' name='%s'>%s</button>", $this->type, $this->name, $this->value);
    }
}
