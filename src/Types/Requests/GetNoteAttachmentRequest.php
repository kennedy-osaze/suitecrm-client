<?php
namespace ste80pa\SuiteCRMClient\Types\Requests;

use ste80pa\SuiteCRMClient\Types\BaseRequest;

/**
 *
 * @author Stefano Pallozzi
 *        
 */
class GetNoteAttachmentRequest extends BaseRequest
{

    /**
     * Session ID returned by a previous login call.
     * 
     * @var string
     */
    public $session;

    /**
     *
     * @var string
     */
    public $id;
}
