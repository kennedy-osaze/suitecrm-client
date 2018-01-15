<?php
namespace ste80pa\SuiteCRMClient\Types\Responses;

use ste80pa\SuiteCRMClient\Types\BaseResponse;

/**
 *
 * @author Stefano Pallozzi
 *        
 */
class SetEntriesResponse extends BaseResponse
{

    /**
     *
     * @var mixed
     */
    public $return;

    public function fromData($data)
    {
        if ($data == null) {
            return $this;
        }

        $this->return = $data->ids;

        return $this;
    }
}
