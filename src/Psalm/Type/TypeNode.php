<?php

declare(strict_types=1);

namespace Psalm\Type;

interface TypeNode
{
    /** @internal Should only be used by the TypeVisitor */
    public function visit(TypeVisitor $visitor): bool;

    /**
     * @param static $node
     * @param-out static $node
     * @internal Should only be used by the MutableTypeVisitor
     * @psalm-fixme ReferenceConstraintViolation
     */
    public static function visitMutable(MutableTypeVisitor $visitor, &$node, bool $cloned): bool;
}
