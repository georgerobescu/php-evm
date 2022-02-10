<?php

namespace M1guelpf\EVM\Opcodes;

use M1guelpf\EVM\ExecutionContext;

class XorOp extends BaseOpcode
{
    public function __construct()
    {
        parent::__construct(0x18, 'XOR');
    }

    public function execute(ExecutionContext $context)
    {
        $context->stack->push($context->stack->pop() ^ $context->stack->pop());
    }
}
