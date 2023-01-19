<?php 

namespace Viriapi\Viri;
/**
 * ApiFormatter GET data from database
 */

class viri{
    protected static $response = [
        /**
         * Array Formatter response
         * 
         * @param array $response
         * @return array
         */
        'GET' => null,
        'status' => null,
        'data' => null,
    ];

    public static function createApi( $GET , $status , $data = null ) {
        self::$response['GET'] = $GET;
        self::$response['status'] = $status;
        self::$response['data'] = $data;

        return response()->json(self::$response, self::$response['GET']);
    }
    // public function test() {
    //     return 'hi';
    // }
}