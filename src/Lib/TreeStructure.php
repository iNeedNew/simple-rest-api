<?php

namespace Lib;

class TreeStructure
{
    /**
     * Create tree structure from "self-relation" nodes
     * @param object[] $nodes
     * @param null $parentId
     * @param string $parentProperty
     * @return array
     */
    public static function create(array $nodes, $parentId = null, string $parentProperty = 'parent_id'): array
    {
        $tree = [];

        foreach ($nodes as $node) {
            if ($node->{$parentProperty} == $parentId) {
                $children = self::create($nodes, $node->id);
                if ($children) $node->children = $children;
                $tree[] = $node;
            }
        }
        return $tree;
    }
}