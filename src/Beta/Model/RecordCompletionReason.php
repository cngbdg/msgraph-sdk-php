<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecordCompletionReason File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* RecordCompletionReason class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RecordCompletionReason extends Enum
{
    /**
    * The Enum RecordCompletionReason
    */
    const OPERATION_CANCELED = "operationCanceled";
    const STOP_TONE_DETECTED = "stopToneDetected";
    const MAX_RECORD_DURATION_REACHED = "maxRecordDurationReached";
    const INITIAL_SILENCE_TIMEOUT = "initialSilenceTimeout";
    const MAX_SILENCE_TIMEOUT = "maxSilenceTimeout";
    const PLAY_PROMPT_FAILED = "playPromptFailed";
    const PLAY_BEEP_FAILED = "playBeepFailed";
    const MEDIA_RECEIVE_TIMEOUT = "mediaReceiveTimeout";
    const UNSPECIFIED_ERROR = "unspecifiedError";
}