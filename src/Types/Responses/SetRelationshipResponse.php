<?php
namespace ste80pa\SuiteCRMClient\Types\Responses;

use ste80pa\SuiteCRMClient\Types\BaseResponse;

/**
 *
 * @author Stefano Pallozzi
 *        
 */
class SetRelationshipResponse extends BaseResponse
{

    /**
     *
     * @var mixed
     */
    public $return;

    public function fromData($data)
    {
    	return $data;
    }
}
