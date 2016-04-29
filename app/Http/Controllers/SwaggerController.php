<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
/**
 * @SWG\Swagger(
 *     schemes={"http","https"},
 *     host="startme.dev/api/v1",
 *     basePath="/",
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="StartMe API Documentation",
 *         description="API for admins - Milos - Nemanja",
 *         termsOfService="Don't touch prekidach",
 *         @SWG\Contact(
 *             email="matovic@gmail.com",
 *             email="njaglicic@gmail.com"
 *         ),
 *         @SWG\License(
 *             name="Private License",
 *             url="http://startme.dev/license"
 *         )
 *     ),
 *     @SWG\ExternalDocumentation(
 *         description="Find out more about startme",
 *         url="http://startme.io."
 *     )
 * )
 */
class SwaggerController extends Controller
{
    //
}
