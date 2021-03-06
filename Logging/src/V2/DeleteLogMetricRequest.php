<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_metrics.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The parameters to DeleteLogMetric.
 *
 * Generated from protobuf message <code>google.logging.v2.DeleteLogMetricRequest</code>
 */
class DeleteLogMetricRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the metric to delete:
     *     "projects/[PROJECT_ID]/metrics/[METRIC_ID]"
     *
     * Generated from protobuf field <code>string metric_name = 1;</code>
     */
    private $metric_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $metric_name
     *           The resource name of the metric to delete:
     *               "projects/[PROJECT_ID]/metrics/[METRIC_ID]"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LoggingMetrics::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the metric to delete:
     *     "projects/[PROJECT_ID]/metrics/[METRIC_ID]"
     *
     * Generated from protobuf field <code>string metric_name = 1;</code>
     * @return string
     */
    public function getMetricName()
    {
        return $this->metric_name;
    }

    /**
     * The resource name of the metric to delete:
     *     "projects/[PROJECT_ID]/metrics/[METRIC_ID]"
     *
     * Generated from protobuf field <code>string metric_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMetricName($var)
    {
        GPBUtil::checkString($var, True);
        $this->metric_name = $var;

        return $this;
    }

}

