angular.module('mytodos', ['ui.bootstrap']).controller('TodoController', function($scope) {
  /* paggination */
  if (localStorage.getItem("itemPerPage") === null) {
    localStorage.setItem("itemPerPage", 10);
  }
  function getPerPage(){			
    return parseInt(localStorage.itemPerPage);
  }
  $scope.changeNum = function (itemNum) {
    localStorage.itemPerPage = itemNum;
    $scope.numPerPage = getPerPage();
  };

  console.log(localStorage.itemPerPage);
  $scope.numsForPage = [5, 10, 25, 50, 100];
  $scope.currentPage = 1;
  $scope.numPerPage = getPerPage();
  $scope.maxSize = 5;
  
  // Sort
  $scope.changeSort = function (item) {
      $scope.reverse = $scope.reverse =! $scope.reverse;
      $scope.sort = item;
  };
  
  
  $scope.filteredTodos = [];
  $scope.currentPage = 1;
  $scope.numPerPage = 5;
  $scope.maxSize = 5;
  $scope.expenses = [
      {
        "id": 1,
        "name": "Warren Phillips",
        "amount": "37.47",
        "date": "2016-01-19 10:22:58",
        "item_id": 1,
        "model_id": 1,
        "description": "blandit. Nam nulla magna, malesuada vel, convallis in, cursus et, eros. Proin ultrices. Duis volutpat nunc sit amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate, risus a ultricies adipiscing, enim mi tempor lorem, eget mollis lectus pede et risus. Quisque libero lacus, varius et, euismod et, commodo at, libero. Morbi accumsan"
      }, {
        "id": 2,
        "name": "Declan Ayala",
        "amount": "29.18",
        "date": "2016-09-12 17:39:14",
        "item_id": 3,
        "model_id": 8,
        "description": "Integer eu lacus. Quisque imperdiet, erat nonummy ultricies ornare, elit elit fermentum risus, at fringilla purus mauris a nunc. In at pede. Cras"
      }, {
        "id": 3,
        "name": "Ivana Bell",
        "amount": "88.53",
        "date": "2016-01-20 10:08:03",
        "item_id": 3,
        "model_id": 6,
        "description": "Etiam imperdiet dictum magna. Ut tincidunt orci quis lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo, in lobortis tellus justo sit amet nulla."
      }, {
        "id": 4,
        "name": "Brennan Noel",
        "amount": "17.76",
        "date": "2016-01-21 14:02:28",
        "item_id": 6,
        "model_id": 22,
        "description": "velit eu sem. Pellentesque ut ipsum ac mi eleifend egestas. Sed pharetra, felis"
      }, {
        "id": 5,
        "name": "Thomas Tran",
        "amount": "29.59",
        "date": "2016-01-23 13:08:36",
        "item_id": 3,
        "model_id": 7,
        "description": "nisl sem, consequat nec, mollis vitae, posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet ornare."
      }, {
        "id": 6,
        "name": "Tucker Bolton",
        "amount": "66.69",
        "date": "2016-01-23 04:41:07",
        "item_id": 4,
        "model_id": 14,
        "description": "et risus. Quisque libero lacus, varius et, euismod et, commodo at, libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus sit amet luctus vulputate, nisi sem semper erat, in consectetuer ipsum nunc id enim. Curabitur massa. Vestibulum accumsan neque et nunc. Quisque ornare tortor at risus. Nunc ac sem ut dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras interdum."
      }, {
        "id": 7,
        "name": "Medge Mullen",
        "amount": "23.78",
        "date": "2016-02-03 07:01:56",
        "item_id": 4,
        "model_id": 12,
        "description": "dictum mi, ac mattis velit justo nec ante. Maecenas mi felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras interdum. Nunc sollicitudin commodo ipsum. Suspendisse non leo. Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac, fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et"
      }, {
        "id": 8,
        "name": "Morgan Merritt",
        "amount": "54.09",
        "date": "2016-08-24 10:56:40",
        "item_id": 2,
        "model_id": 4,
        "description": "Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate, risus a ultricies adipiscing, enim mi tempor lorem, eget mollis lectus pede et risus. Quisque libero lacus, varius et, euismod et,"
      }, {
        "id": 9,
        "name": "Janna Casey",
        "amount": "22.61",
        "date": "2016-02-02 01:31:03",
        "item_id": 1,
        "model_id": 1,
        "description": "eros turpis non enim. Mauris quis turpis vitae purus gravida sagittis. Duis gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero est, congue a, aliquet vel, vulputate eu, odio. Phasellus at augue id ante dictum"
      }, {
        "id": 10,
        "name": "Buffy Best",
        "amount": "59.98",
        "date": "2016-02-05 18:15:57",
        "item_id": 5,
        "model_id": 15,
        "description": "lacus vestibulum lorem, sit amet ultricies sem magna nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod est arcu ac orci. Ut semper pretium neque. Morbi quis urna."
      }, {
        "id": 11,
        "name": "Brielle Newman",
        "amount": "52.26",
        "date": "2016-01-28 10:25:21",
        "item_id": 4,
        "model_id": 18,
        "description": "placerat, augue. Sed molestie. Sed id risus quis diam luctus lobortis."
      }, {
        "id": 12,
        "name": "Julie James",
        "amount": "6.38",
        "date": "2016-01-28 10:27:03",
        "item_id": 3,
        "model_id": 6,
        "description": "placerat, orci lacus vestibulum lorem, sit amet ultricies sem magna nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque"
      }, {
        "id": 13,
        "name": "Shaine Barnett",
        "amount": "0.04",
        "date": "2016-01-25 16:00:43",
        "item_id": 5,
        "model_id": 20,
        "description": "laoreet, libero et tristique pellentesque, tellus sem mollis dui, in sodales elit erat vitae risus. Duis a mi fringilla mi lacinia mattis. Integer eu lacus. Quisque imperdiet, erat nonummy ultricies ornare, elit elit fermentum risus, at fringilla purus mauris a nunc. In at pede. Cras vulputate velit eu sem. Pellentesque ut ipsum ac mi eleifend egestas. Sed"
      }, {
        "id": 14,
        "name": "Genevieve Underwood",
        "amount": "50.71",
        "date": "2016-03-10 19:28:425",
        "item_id": 6,
        "model_id": 22,
        "description": "consequat auctor, nunc nulla vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae diam. Proin dolor. Nulla semper"
      }, {
        "id": 15,
        "name": "Adam Villarreal",
        "amount": "18.48",
        "date": "2016-09-13 19:27:00",
        "item_id": 2,
        "model_id": 5,
        "description": "nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci sem eget massa. Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris"
      }
    ];
  $scope.theItems = {
    1: {'name': 'TV', 'models': [1] },
    2: {'name': 'Radio', 'models': [2,3,4,5] },
    3: {'name': 'Mobile', 'models': [6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26] },
    4: {'name': 'Tablet', 'models': [27,28,29,30] },
    5: {'name': 'Camera', 'models': [31,32,33,34,35,36,37,38,39] },
    6: {'name': 'Speaker', 'models': [40] }
  }
  $scope.theModels = {
    1: {'name': 'Toshiba', 'make': 1},
    2: {'name': 'Samsung', 'make': 2},
    3: {'name': 'Sony', 'make': 2},
    4: {'name': 'Panasonic', 'make': 2},
    5: {'name': 'Akai', 'make': 2},
    6: {'name': 'iPhone', 'make': 3},
    7: {'name': 'Lumia', 'make': 3},
    8: {'name': 'Galaxy', 'make': 3},
    9: {'name': 'Note II', 'make': 3},
    10: {'name': 'Note IV', 'make': 3},
    11: {'name': '159 Sportwagon', 'make': 3},
    12: {'name': 'Pixel C', 'make': 4},
    13: {'name': 'Surface Pro', 'make': 4},
    14: {'name': 'iPad Air', 'make': 4},
    15: {'name': 'Xperia', 'make': 4},
    16: {'name': 'Galaxy S2', 'make': 4},
    17: {'name': 'Sony A7R II', 'make': 5},
    18: {'name': 'Nikon D500', 'make': 5},
    19: {'name': 'Fuji X-T10', 'make': 5},
    20: {'name': 'RX100 III', 'make': 5},
    21: {'name': 'Boom 2', 'make': 5},
    22: {'name': 'Fugoo', 'make': 6},
    23: {'name': 'JBL Charge', 'make': 6},
    24: {'name': 'JBL Xtreme', 'make': 6},
  }
  $scope.theItemsArray = $.map($scope.theItems, function(val, index) {
    val.key = index;
    return [val];
  });
  $scope.theModelArray = $.map($scope.theModels, function(val, index) {
    val.key = index;
    return [val];
  });
}).filter('pagination', function() {
	  return function(input, currentPage, pageSize) {
	    if(angular.isArray(input)) {
	      var start = (currentPage-1)*pageSize;
	      var end = currentPage*pageSize;
	      return input.slice(start, end);
	    }
	  };
	});