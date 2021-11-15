<?php
// This file was auto-generated from sdk-root/src/data/chime-sdk-meetings/2021-07-15/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>The Amazon Chime SDK meetings APIs in this section allow software developers to create Amazon Chime SDK meetings, set the AWS Regions for meetings, create and manage users, and send and receive meeting notifications. For more information about the meeting APIs, see <a href="http://amazonaws.com/chime/latest/APIReference/API_Operations_Amazon_Chime_SDK_meetings">Amazon Chime SDK meetings</a>.</p>', 'operations' => [ 'BatchCreateAttendee' => '<p>Creates a group of meeting attendees.</p>', 'CreateAttendee' => '<p> Creates a new attendee for an active Amazon Chime SDK meeting. For more information about the Amazon Chime SDK, see <a href="https://docs.aws.amazon.com/chime/latest/dg/meetings-sdk.html">Using the Amazon Chime SDK</a> in the <i>Amazon Chime Developer Guide</i>. </p>', 'CreateMeeting' => '<p>Creates a new Amazon Chime SDK meeting in the specified media Region with no initial attendees. For more information about specifying media Regions, see <a href="https://docs.aws.amazon.com/chime/latest/dg/chime-sdk-meetings-regions.html">Amazon Chime SDK Media Regions</a> in the <i>Amazon Chime Developer Guide</i>. For more information about the Amazon Chime SDK, see <a href="https://docs.aws.amazon.com/chime/latest/dg/meetings-sdk.html">Using the Amazon Chime SDK</a> in the <i>Amazon Chime Developer Guide</i>. </p>', 'CreateMeetingWithAttendees' => '<p> Creates a new Amazon Chime SDK meeting in the specified media Region, with attendees. For more information about specifying media Regions, see <a href="https://docs.aws.amazon.com/chime/latest/dg/chime-sdk-meetings-regions.html">Amazon Chime SDK Media Regions</a> in the <i>Amazon Chime Developer Guide</i>. For more information about the Amazon Chime SDK, see <a href="https://docs.aws.amazon.com/chime/latest/dg/meetings-sdk.html">Using the Amazon Chime SDK</a> in the <i>Amazon Chime Developer Guide</i>. </p>', 'DeleteAttendee' => '<p>Deletes an attendee from the specified Amazon Chime SDK meeting and deletes their <code>JoinToken</code>. Attendees are automatically deleted when a Amazon Chime SDK meeting is deleted. For more information about the Amazon Chime SDK, see <a href="https://docs.aws.amazon.com/chime/latest/dg/meetings-sdk.html">Using the Amazon Chime SDK</a> in the <i>Amazon Chime Developer Guide</i>.</p>', 'DeleteMeeting' => '<p>Deletes the specified Amazon Chime SDK meeting. The operation deletes all attendees, disconnects all clients, and prevents new clients from joining the meeting. For more information about the Amazon Chime SDK, see <a href="https://docs.aws.amazon.com/chime/latest/dg/meetings-sdk.html">Using the Amazon Chime SDK</a> in the <i>Amazon Chime Developer Guide</i>.</p>', 'GetAttendee' => '<p> Gets the Amazon Chime SDK attendee details for a specified meeting ID and attendee ID. For more information about the Amazon Chime SDK, see <a href="https://docs.aws.amazon.com/chime/latest/dg/meetings-sdk.html">Using the Amazon Chime SDK</a> in the <i>Amazon Chime Developer Guide</i>. </p>', 'GetMeeting' => '<p>Gets the Amazon Chime SDK meeting details for the specified meeting ID. For more information about the Amazon Chime SDK, see <a href="https://docs.aws.amazon.com/chime/latest/dg/meetings-sdk.html">Using the Amazon Chime SDK</a> in the <i>Amazon Chime Developer Guide</i>.</p>', 'ListAttendees' => '<p> Lists the attendees for the specified Amazon Chime SDK meeting. For more information about the Amazon Chime SDK, see <a href="https://docs.aws.amazon.com/chime/latest/dg/meetings-sdk.html">Using the Amazon Chime SDK</a> in the <i>Amazon Chime Developer Guide</i>. </p>', 'StartMeetingTranscription' => '<p>Starts transcription for the specified <code>meetingId</code>.</p>', 'StopMeetingTranscription' => '<p>Stops transcription for the specified <code>meetingId</code>.</p>', ], 'shapes' => [ 'Arn' => [ 'base' => NULL, 'refs' => [ 'NotificationsConfiguration$LambdaFunctionArn' => '<p>The ARN of the AWS Lambda function in the notifications configuration.</p>', 'NotificationsConfiguration$SnsTopicArn' => '<p>The ARN of the SNS topic.</p>', 'NotificationsConfiguration$SqsQueueArn' => '<p>The ARN of the SQS queue.</p>', ], ], 'Attendee' => [ 'base' => '<p>An Amazon Chime SDK meeting attendee. Includes a unique <code>AttendeeId</code> and <code>JoinToken</code>. The <code>JoinToken</code> allows a client to authenticate and join as the specified attendee. The <code>JoinToken</code> expires when the meeting ends, or when <a>DeleteAttendee</a> is called. After that, the attendee is unable to join the meeting. </p> <p>We recommend securely transferring each <code>JoinToken</code> from your server application to the client so that no other client has access to the token except for the one authorized to represent the attendee.</p>', 'refs' => [ 'AttendeeList$member' => NULL, 'CreateAttendeeResponse$Attendee' => '<p>The attendee information, including attendee ID and join token.</p>', 'GetAttendeeResponse$Attendee' => '<p>The Amazon Chime SDK attendee information.</p>', ], ], 'AttendeeList' => [ 'base' => NULL, 'refs' => [ 'BatchCreateAttendeeResponse$Attendees' => '<p>The attendee information, including attendees\' IDs and join tokens.</p>', 'CreateMeetingWithAttendeesResponse$Attendees' => '<p>The attendee information, including attendees\' IDs and join tokens.</p>', 'ListAttendeesResponse$Attendees' => '<p>The Amazon Chime SDK attendee information.</p>', ], ], 'BadRequestException' => [ 'base' => '<p>The input parameters don\'t match the service\'s restrictions.</p>', 'refs' => [], ], 'BatchCreateAttendeeErrorList' => [ 'base' => NULL, 'refs' => [ 'BatchCreateAttendeeResponse$Errors' => '<p>If the action fails for one or more of the attendees in the request, a list of the attendees is returned, along with error codes and error messages.</p>', 'CreateMeetingWithAttendeesResponse$Errors' => '<p>If the action fails for one or more of the attendees in the request, a list of the attendees is returned, along with error codes and error messages.</p>', ], ], 'BatchCreateAttendeeRequest' => [ 'base' => NULL, 'refs' => [], ], 'BatchCreateAttendeeResponse' => [ 'base' => NULL, 'refs' => [], ], 'ClientRequestToken' => [ 'base' => NULL, 'refs' => [ 'CreateMeetingRequest$ClientRequestToken' => '<p>The unique identifier for the client request. Use a different token for different meetings.</p>', 'CreateMeetingWithAttendeesRequest$ClientRequestToken' => '<p>The unique identifier for the client request. Use a different token for different meetings.</p>', ], ], 'CreateAttendeeError' => [ 'base' => '<p>The list of errors returned when errors are encountered during the BatchCreateAttendee and CreateAttendee actions. This includes external user IDs, error codes, and error messages.</p>', 'refs' => [ 'BatchCreateAttendeeErrorList$member' => NULL, ], ], 'CreateAttendeeRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateAttendeeRequestItem' => [ 'base' => '<p>The Amazon Chime SDK attendee fields to create, used with the BatchCreateAttendee action.</p>', 'refs' => [ 'CreateAttendeeRequestItemList$member' => NULL, 'CreateMeetingWithAttendeesRequestItemList$member' => NULL, ], ], 'CreateAttendeeRequestItemList' => [ 'base' => NULL, 'refs' => [ 'BatchCreateAttendeeRequest$Attendees' => '<p>The attendee information, including attendees\' IDs and join tokens.</p>', ], ], 'CreateAttendeeResponse' => [ 'base' => NULL, 'refs' => [], ], 'CreateMeetingRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateMeetingResponse' => [ 'base' => NULL, 'refs' => [], ], 'CreateMeetingWithAttendeesRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateMeetingWithAttendeesRequestItemList' => [ 'base' => NULL, 'refs' => [ 'CreateMeetingWithAttendeesRequest$Attendees' => '<p>The attendee information, including attendees\' IDs and join tokens.</p>', ], ], 'CreateMeetingWithAttendeesResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteAttendeeRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteMeetingRequest' => [ 'base' => NULL, 'refs' => [], ], 'EngineTranscribeMedicalSettings' => [ 'base' => '<p>Settings specific to the Amazon Transcribe Medical engine.</p>', 'refs' => [ 'TranscriptionConfiguration$EngineTranscribeMedicalSettings' => '<p>The transcription configuration settings passed to Amazon Transcribe Medical.</p>', ], ], 'EngineTranscribeSettings' => [ 'base' => '<p>Settings specific to the Amazon Transcribe engine.</p>', 'refs' => [ 'TranscriptionConfiguration$EngineTranscribeSettings' => '<p>The transcription configuration settings passed to Amazon Transcribe.</p>', ], ], 'ExternalMeetingId' => [ 'base' => NULL, 'refs' => [ 'CreateMeetingRequest$ExternalMeetingId' => '<p>The external meeting ID.</p>', 'CreateMeetingWithAttendeesRequest$ExternalMeetingId' => '<p>The external meeting ID.</p>', 'Meeting$ExternalMeetingId' => '<p>The external meeting ID.</p>', ], ], 'ExternalUserId' => [ 'base' => NULL, 'refs' => [ 'Attendee$ExternalUserId' => '<p>The Amazon Chime SDK external user ID. An idempotency token. Links the attendee to an identity managed by a builder application.</p>', 'CreateAttendeeError$ExternalUserId' => '<p>The Amazon Chime SDK external user ID. An idempotency token. Links the attendee to an identity managed by a builder application.</p>', 'CreateAttendeeRequest$ExternalUserId' => '<p>The Amazon Chime SDK external user ID. An idempotency token. Links the attendee to an identity managed by a builder application.</p>', 'CreateAttendeeRequestItem$ExternalUserId' => '<p>The Amazon Chime SDK external user ID. An idempotency token. Links the attendee to an identity managed by a builder application.</p>', 'CreateMeetingRequest$MeetingHostId' => '<p>Reserved.</p>', 'CreateMeetingWithAttendeesRequest$MeetingHostId' => '<p>Reserved.</p>', 'Meeting$MeetingHostId' => '<p>Reserved.</p>', ], ], 'ForbiddenException' => [ 'base' => '<p>The client is permanently forbidden from making the request.</p>', 'refs' => [], ], 'GetAttendeeRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetAttendeeResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetMeetingRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetMeetingResponse' => [ 'base' => NULL, 'refs' => [], ], 'GuidString' => [ 'base' => NULL, 'refs' => [ 'Attendee$AttendeeId' => '<p>The Amazon Chime SDK attendee ID.</p>', 'BatchCreateAttendeeRequest$MeetingId' => '<p>The Amazon Chime SDK ID of the meeting to which you\'re adding attendees.</p>', 'CreateAttendeeRequest$MeetingId' => '<p>The unique ID of the meeting.</p>', 'DeleteAttendeeRequest$MeetingId' => '<p>The Amazon Chime SDK meeting ID.</p>', 'DeleteAttendeeRequest$AttendeeId' => '<p>The Amazon Chime SDK attendee ID.</p>', 'DeleteMeetingRequest$MeetingId' => '<p>The Amazon Chime SDK meeting ID.</p>', 'GetAttendeeRequest$MeetingId' => '<p>The Amazon Chime SDK meeting ID.</p>', 'GetAttendeeRequest$AttendeeId' => '<p>The Amazon Chime SDK attendee ID.</p>', 'GetMeetingRequest$MeetingId' => '<p>The Amazon Chime SDK meeting ID.</p>', 'ListAttendeesRequest$MeetingId' => '<p>The Amazon Chime SDK meeting ID.</p>', 'Meeting$MeetingId' => '<p>The Amazon Chime SDK meeting ID.</p>', 'StartMeetingTranscriptionRequest$MeetingId' => '<p>The unique ID of the meeting being transcribed.</p>', 'StopMeetingTranscriptionRequest$MeetingId' => '<p>The unique ID of the meeting for which you stop transcription.</p>', ], ], 'JoinTokenString' => [ 'base' => NULL, 'refs' => [ 'Attendee$JoinToken' => '<p>The join token used by the Amazon Chime SDK attendee.</p>', ], ], 'LimitExceededException' => [ 'base' => '<p>The request exceeds the resource limit.</p>', 'refs' => [], ], 'ListAttendeesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListAttendeesResponse' => [ 'base' => NULL, 'refs' => [], ], 'MediaPlacement' => [ 'base' => '<p>A set of endpoints used by clients to connect to the media service group for an Amazon Chime SDK meeting.</p>', 'refs' => [ 'Meeting$MediaPlacement' => '<p>The media placement for the meeting.</p>', ], ], 'MediaRegion' => [ 'base' => NULL, 'refs' => [ 'CreateMeetingRequest$MediaRegion' => '<p>The Region in which to create the meeting.</p> <p> Available values: <code>af-south-1</code> , <code>ap-northeast-1</code> , <code>ap-northeast-2</code> , <code>ap-south-1</code> , <code>ap-southeast-1</code> , <code>ap-southeast-2</code> , <code>ca-central-1</code> , <code>eu-central-1</code> , <code>eu-north-1</code> , <code>eu-south-1</code> , <code>eu-west-1</code> , <code>eu-west-2</code> , <code>eu-west-3</code> , <code>sa-east-1</code> , <code>us-east-1</code> , <code>us-east-2</code> , <code>us-west-1</code> , <code>us-west-2</code> . </p>', 'CreateMeetingWithAttendeesRequest$MediaRegion' => '<p>The Region in which to create the meeting.</p>', 'Meeting$MediaRegion' => '<p>The Region in which you create the meeting. Available values: <code>af-south-1</code>, <code>ap-northeast-1</code>, <code>ap-northeast-2</code>, <code>ap-south-1</code>, <code>ap-southeast-1</code>, <code>ap-southeast-2</code>, <code>ca-central-1</code>, <code>eu-central-1</code>, <code>eu-north-1</code>, <code>eu-south-1</code>, <code>eu-west-1</code>, <code>eu-west-2</code>, <code>eu-west-3</code>, <code>sa-east-1</code>, <code>us-east-1</code>, <code>us-east-2</code>, <code>us-west-1</code>, <code>us-west-2</code>.</p>', ], ], 'Meeting' => [ 'base' => '<p>A meeting created using the Amazon Chime SDK.</p>', 'refs' => [ 'CreateMeetingResponse$Meeting' => '<p>The meeting information, including the meeting ID and <code>MediaPlacement</code>.</p>', 'CreateMeetingWithAttendeesResponse$Meeting' => '<p>The meeting information, including the meeting ID and <code>MediaPlacement</code>.</p>', 'GetMeetingResponse$Meeting' => '<p>The Amazon Chime SDK meeting information.</p>', ], ], 'NotFoundException' => [ 'base' => '<p>One or more of the resources in the request does not exist in the system.</p>', 'refs' => [], ], 'NotificationsConfiguration' => [ 'base' => '<p>The configuration for resource targets to receive notifications when meeting and attendee events occur.</p>', 'refs' => [ 'CreateMeetingRequest$NotificationsConfiguration' => '<p>The configuration for resource targets to receive notifications when meeting and attendee events occur.</p>', 'CreateMeetingWithAttendeesRequest$NotificationsConfiguration' => '<p>The configuration for resource targets to receive notifications when meeting and attendee events occur.</p>', ], ], 'ResultMax' => [ 'base' => NULL, 'refs' => [ 'ListAttendeesRequest$MaxResults' => '<p>The maximum number of results to return in a single call.</p>', ], ], 'RetryAfterSeconds' => [ 'base' => NULL, 'refs' => [ 'ServiceUnavailableException$RetryAfterSeconds' => '<p>The number of seconds the caller should wait before retrying.</p>', ], ], 'ServiceUnavailableException' => [ 'base' => '<p>The service is currently unavailable.</p>', 'refs' => [], ], 'StartMeetingTranscriptionRequest' => [ 'base' => NULL, 'refs' => [], ], 'StopMeetingTranscriptionRequest' => [ 'base' => NULL, 'refs' => [], ], 'String' => [ 'base' => NULL, 'refs' => [ 'BadRequestException$Code' => NULL, 'BadRequestException$Message' => NULL, 'BadRequestException$RequestId' => '<p>The request id associated with the call responsible for the exception.</p>', 'CreateAttendeeError$ErrorCode' => '<p>The error code.</p>', 'CreateAttendeeError$ErrorMessage' => '<p>The error message.</p>', 'EngineTranscribeMedicalSettings$VocabularyName' => '<p>The name of the vocabulary passed to Amazon Transcribe Medical.</p>', 'EngineTranscribeSettings$VocabularyFilterName' => '<p>The name of the vocabulary filter passed to Amazon Transcribe.</p>', 'EngineTranscribeSettings$VocabularyName' => '<p>The name of the vocabulary passed to Amazon Transcribe.</p>', 'ForbiddenException$Code' => NULL, 'ForbiddenException$Message' => NULL, 'ForbiddenException$RequestId' => '<p>The request id associated with the call responsible for the exception.</p>', 'LimitExceededException$Code' => NULL, 'LimitExceededException$Message' => NULL, 'LimitExceededException$RequestId' => '<p>The request id associated with the call responsible for the exception.</p>', 'ListAttendeesRequest$NextToken' => '<p>The token to use to retrieve the next page of results.</p>', 'ListAttendeesResponse$NextToken' => '<p>The token to use to retrieve the next page of results.</p>', 'MediaPlacement$AudioHostUrl' => '<p>The audio host URL.</p>', 'MediaPlacement$AudioFallbackUrl' => '<p>The audio fallback URL.</p>', 'MediaPlacement$SignalingUrl' => '<p>The signaling URL.</p>', 'MediaPlacement$TurnControlUrl' => '<p>The turn control URL.</p>', 'MediaPlacement$ScreenDataUrl' => '<p>The screen data URL.</p>', 'MediaPlacement$ScreenViewingUrl' => '<p>The screen viewing URL.</p>', 'MediaPlacement$ScreenSharingUrl' => '<p>The screen sharing URL.</p>', 'MediaPlacement$EventIngestionUrl' => '<p>The event ingestion URL.</p>', 'NotFoundException$Code' => NULL, 'NotFoundException$Message' => NULL, 'NotFoundException$RequestId' => '<p>The request id associated with the call responsible for the exception.</p>', 'ServiceUnavailableException$Code' => NULL, 'ServiceUnavailableException$Message' => NULL, 'ServiceUnavailableException$RequestId' => '<p>The request id associated with the call responsible for the exception.</p>', 'UnauthorizedException$Code' => NULL, 'UnauthorizedException$Message' => NULL, 'UnauthorizedException$RequestId' => '<p>The request id associated with the call responsible for the exception.</p>', 'UnprocessableEntityException$Code' => NULL, 'UnprocessableEntityException$Message' => NULL, 'UnprocessableEntityException$RequestId' => '<p>The request id associated with the call responsible for the exception.</p>', ], ], 'TranscribeLanguageCode' => [ 'base' => NULL, 'refs' => [ 'EngineTranscribeSettings$LanguageCode' => '<p>The language code specified for the Amazon Transcribe engine.</p>', ], ], 'TranscribeMedicalLanguageCode' => [ 'base' => NULL, 'refs' => [ 'EngineTranscribeMedicalSettings$LanguageCode' => '<p>The language code specified for the Amazon Transcribe Medical engine.</p>', ], ], 'TranscribeMedicalRegion' => [ 'base' => NULL, 'refs' => [ 'EngineTranscribeMedicalSettings$Region' => '<p>The AWS Region passed to Amazon Transcribe Medical. If you don\'t specify a Region, Amazon Chime uses the meeting\'s Region.</p>', ], ], 'TranscribeMedicalSpecialty' => [ 'base' => NULL, 'refs' => [ 'EngineTranscribeMedicalSettings$Specialty' => '<p>The specialty specified for the Amazon Transcribe Medical engine.</p>', ], ], 'TranscribeMedicalType' => [ 'base' => NULL, 'refs' => [ 'EngineTranscribeMedicalSettings$Type' => '<p>The type of transcription.</p>', ], ], 'TranscribeRegion' => [ 'base' => NULL, 'refs' => [ 'EngineTranscribeSettings$Region' => '<p>The AWS Region passed to Amazon Transcribe. If you don\'t specify a Region, Amazon Chime uses the meeting\'s Region.</p>', ], ], 'TranscribeVocabularyFilterMethod' => [ 'base' => NULL, 'refs' => [ 'EngineTranscribeSettings$VocabularyFilterMethod' => '<p>The filtering method passed to Amazon Transcribe.</p>', ], ], 'TranscriptionConfiguration' => [ 'base' => '<p>The configuration for the current transcription operation. Must contain <code>EngineTranscribeSettings</code> or <code>EngineTranscribeMedicalSettings</code>.</p>', 'refs' => [ 'StartMeetingTranscriptionRequest$TranscriptionConfiguration' => '<p>The configuration for the current transcription operation. Must contain <code>EngineTranscribeSettings</code> or <code>EngineTranscribeMedicalSettings</code>.</p>', ], ], 'UnauthorizedException' => [ 'base' => '<p>The user isn\'t authorized to request a resource.</p>', 'refs' => [], ], 'UnprocessableEntityException' => [ 'base' => '<p>The request was well-formed but was unable to be followed due to semantic errors.</p>', 'refs' => [], ], ],];