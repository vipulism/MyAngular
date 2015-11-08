 var app = angular.module('myApp', ['ngSanitize']);
        app.controller('formCtr', function($scope, $http) {


    function validateFirst() {

        console.log('validating');

    }

    function clearTxt() {
        $('form')[0].reset();
        // $('.myform').find("input[type=text], textarea").val("");
    }


    $scope.submit = function() {

        validateFirst();

        function inputValid() {
            var valid = true;
            $("input").each(function() {
                if ($(this).val() == "") {
                    valid = false;
                }
            });
            return valid;
        }
        if (!inputValid()) {

            console.log('nanana na!!')

        } else {

            $http.post("insert.php", {
                'empno': $scope.empno,
                'fname': $scope.fname,
                'lname': $scope.lname,
                'dept': $scope.dept,
            }).success(function(data, status, headers, config) {

                console.log('hogya');
                clearTxt();
                

            })

        }



    }
});
   




 