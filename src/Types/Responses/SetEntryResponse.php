<?php
namespace ste80pa\SuiteCRMClient\Types\Responses;

use ste80pa\SuiteCRMClient\Types\BaseResponse;

/**
 *
 * @author Stefano Pallozzi
 *        
 */
class SetEntryResponse extends BaseResponse
{

    /**
     *
     * @var mixed
     */
    public $return;

    public $data;

    public function fromData($data)
    {
        if ($data == null) {
            return $this;
        }

    	$this->return = $data->id;
        $this->data = $data;
        
    	return $this;
    }
}