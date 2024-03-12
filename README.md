
ogni volta che si fa una modifica si lancia generate e php artisan serve


# per installare il package
composer require darkaonline/l5-swagger


# per creare il Provider di Swagger
php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"


# da lanciare ad ogni modifica dei commenti, serve per rigenerare la documentazione
php artisan l5-swagger:generate


/**
     *
     *  @OA\Info(
     *      version="1.0.0",
     *      title="Coding Training",
     *      description="A beautiful day",
     *      @OA\Contact(email="admin@admin.com")
     *  )
     *
     *  @OA\Server(url=L5_SWAGGER_CONST_HOST)
     *
     */


     /**
     *
     *  @OA\Get(
     *      path="/api/player",
     *      tags={"Player"},
     *      summary="Get all players",
     *      @OA\Response(
     *          response=200,
     *          description="Success"
     *      )
     *  )
     *
     */

     /**
     *
     *  @OA\Post(
     *      path="/api/player",
     *      tags= {"Player"},
     *      summary="Insert new player",
     *      @OA\Response(
     *          response=200,
     *          description="Success"
     *      ),
     *      @OA\RequestBody(
     *          @OA\MediaType(
     *              mediaType="application/x-www-form-urlencoded",
     *              @OA\Schema(
     *                  @OA\Property(property="name", type="string"),
     *                  @OA\Property(property="surname", type="string"),
     *                  @OA\Property(property="fullname", type="string"),
     *                  @OA\Property(property="foot", type="string"),
     *                  @OA\Property(property="height", type="string"),
     *                  @OA\Property(property="weight", type="string"),
     *                  @OA\Property(property="birthday", type="string")
     *              )
     *          )
     *      )
     *  )
     *
     */



     /**
     * @OA\Get(
     *     path="/api/player/{id}",
     *     tags={"Player"},
     *     summary="Show single player",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the player",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success"
     *     )
     * )
     */

     /**
     * @OA\Delete(
     *     path="/api/player/{id}",
     *     tags={"Player"},
     *     summary="Delete player",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the player to delete",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success"
     *     )
     * )
     */

     /**
     * @OA\Put(
     *     path="/api/player/{id}",
     *     tags={"Player"},
     *     summary="Update player",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the player to update",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success"
     *     ),
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/x-www-form-urlencoded",
     *             @OA\Schema(
     *                  @OA\Property(property="name", type="string"),
     *                  @OA\Property(property="weight", type="string"),
     *                  @OA\Property(property="birthday", type="string")
     *             )
     *         )
     *     )
     * )
     */
(forse manca l'input dentro put)


c'è una persona che compare in più gruppi

