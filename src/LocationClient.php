<?php namespace DivideBV\Postnl;

/**
 * Client class for CIF's location service.
 */
class LocationClient extends BaseClient
{

    /**
     * The URL of the production WSDL.
     */
    const PRODUCTION_WSDL = 'https://service.postnl.com/CIF/LocationWebService/2_0/?wsdl';

    /**
     * The URL of the sandbox WSDL.
     */
    const SANDBOX_WSDL = 'https://testservice.postnl.com/CIF_SB/LocationWebService/2_0/?wsdl';

    /**
     * @var array $classes
     *     The complex types used by this client.
     */
    protected $classes = [
        'Address',
        'ArrayOfExceptionData',
        'ArrayOfResponseLocation',
        'ArrayOfWarning',
        'BaseLocation',
        'CifException',
        'Coordinate',
        'ExceptionData',
        'GetLocationRequest',
        'GetLocationsInAreaRequest',
        'GetLocationsResponse',
        'GetNearestLocationsRequest',
        'Location',
        'LocationArea',
        'Message',
        'OpeningHours',
        'ResponseLocation',
        'Warning'
    ];

    /**
     * @param ComplexTypes\GetNearestLocationsRequest $getNearestLocations
     * @return ComplexTypes\GetLocationsResult
     */
    public function getNearestLocation(ComplexTypes\GetNearestLocationsRequest $getNearestLocations)
    {
        return $this->__soapCall('GetNearestLocations', [$getNearestLocations]);
    }
}
