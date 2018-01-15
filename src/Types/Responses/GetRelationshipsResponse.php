<?php
namespace ste80pa\SuiteCRMClient\Types\Responses;

use ste80pa\SuiteCRMClient\Types\BaseResponse;

/**
 *
 * @author Stefano Pallozzi
 *        
 */
class GetRelationshipsResponse extends BaseResponse
{

    /**
     *
     * @var mixed
     */
    public $return;

    public function fromData($data)
    {
    	if (isset($data, $data->entry_list)) {
            if (!empty($data->entry_list)) {
                $this->return = count($data->entry_list);

                $results = [];
                foreach ($data->entry_list as $result) {
                    $value = [];
                    $record = $result->name_value_list;
                    foreach ($result->name_value_list as $prop) {
                        $value[$prop->name] = $prop->value;
                    }
                    $results[] = $value;
                }
                return $results;
            }
    	}

    	return [];
    }
}
