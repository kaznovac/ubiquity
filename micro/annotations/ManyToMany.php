<?php
namespace micro\annotations;

/**
 * Annotation ManyToMany
 * @author jc
 * @version 1.0.0.2
 * @package annotations
 * @Target("property")
 */
class ManyToMany extends BaseAnnotation{
	public $targetEntity;
	public $inversedBy;
	public $mappedBy;
}