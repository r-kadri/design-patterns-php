<?php

namespace Ryan\DesignPatternsPhp\Strategy;

interface MessageSenderStrategy {
    public function send(): void;
}