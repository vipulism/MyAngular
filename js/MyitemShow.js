app.controller('MyitemShow', function($scope, $http) {

    $scope.sortType = 'date'; // set the default sort type
    $scope.sortReverse = true; // set the default sort order
    $scope.currentPage = 0;
    $scope.pageSize = 6;
    $scope.data = [];

    $scope.numberOfPages = function() {
        return Math.ceil($scope.data.length / $scope.pageSize);
    }
    for (var i = 0; i < 24; i++) {
        $scope.data.push("Item " + i);
    }
    $http.get("json.php")
        .success(function(response) {
            $scope.items = response;
        });
    $scope.deleteItem = function(dIndex) {
         dIndex = dIndex - 1;
        $scope.items.splice(dIndex);
        delItem(dIndex)

    }


    function delItem(dIndex) {

        alert(dIndex)
        $http.post("delete.php", {

            'dIndex': dIndex,

        }).success(function(dIndex) {

            console.log('delete?');
        });

   /*     $http({
            method: "delete"

        })*/
    }

});
