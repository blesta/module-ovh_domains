<?php
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'ovh_domains_response.php';

/**
 * OVH Domains API
 *
 * @link http://www.blesta.com Phillips Data, Inc.
 */
class OvhDomainsApi
{
    ##
    # EDIT REQUIRED Update the below API url or replace it with an appropriate module row variable
    ##
    /**
     * @var string The API URL
     */
    private $apiUrl = '';

    /**
     * @var string Placeholder description
     */
    private $application_key;

    /**
     * @var string Placeholder description
     */
    private $secret_key;

    /**
     * @var string Placeholder description
     */
    private $consumer_key;

    /**
     * @var string Placeholder description
     */
    private $endpoint;
    ##
    # EDIT REQUIRED Update the above variable descriptions
    ##

    // The data sent with the last request served by this API
    private $lastRequest = [];

    /**
     * Initializes the request parameter
     *
     * @param string $application_key Placeholder description
     * @param string $secret_key Placeholder description
     * @param string $consumer_key Placeholder description
     * @param string $endpoint Placeholder description
     */
    ##
    # EDIT REQUIRED Update the above variable descriptions and parameter list below
    ##
    public function __construct($application_key,$secret_key,$consumer_key,$endpoint)
    {
        $this->application_key = $application_key;
        $this->secret_key = $secret_key;
        $this->consumer_key = $consumer_key;
        $this->endpoint = $endpoint;
    }

    /**
     * Send an API request to OvhDomains
     *
     * @param string $route The path to the API method
     * @param array $body The data to be sent
     * @param string $method Data transfer method (POST, GET, PUT, DELETE)
     * @return OvhDomainsResponse
     */
    public function apiRequest($route, array $body, $method)
    {
        $url = $this->apiUrl . '/' . $route;
        $curl = curl_init();

        switch (strtoupper($method)) {
            case 'DELETE':
                // Set data using get parameters
            case 'GET':
                $url .= empty($body) ? '' : '?' . http_build_query($body);
                break;
            case 'POST':
                curl_setopt($curl, CURLOPT_POST, 1);
                // Use the default behavior to set data fields
            default:
                curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($body));
                break;
        }

        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, strtoupper($method));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HEADER, 1);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curl, CURLOPT_SSLVERSION, 1);

        $headers = [];
        ##
        #  Set any neccessary headers here
        ##
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $this->lastRequest = ['content' => $body, 'headers' => $headers];
        $result = curl_exec($curl);
        if (curl_errno($curl)) {
            $error = [
                'error' => 'Curl Error',
                'message' => 'An internal error occurred, or the server did not respond to the request.',
                'status' => 500
            ];

            return new OvhDomainsResponse(['content' => json_encode($error), 'headers' => []]);
        }
        curl_close($curl);

        $data = explode("\n", $result);

        // Return request response
        return new OvhDomainsResponse([
            'content' => $data[count($data) - 1],
            'headers' => array_splice($data, 0, count($data) - 1)]
        );
    }

//    The above apiRequest() method is publically accessible and can be used for any necessary requests
//    but it is often useful to define helper functions like the one below for convenience
//
//    /**
//     * Fetch customer info from OVH Domains
//     *
//     * @param string $email The email by which to identify the customer and use for login
//     * @return OvhDomainsResponse
//     */
//    public function getUser($email)
//    {
//        return $this->apiRequest('customer/list', ['customers' => [$email]], 'POST');
//    }
}
