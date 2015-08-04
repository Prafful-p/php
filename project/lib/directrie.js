angular.module('myApp.directives', []).
  directive('selectAll', function() {
    return {
      restrict: 'A',
      scope: {},
      link: function (scope,elem,attr) {
        var textarea = elem.parent().find("textarea")[0];
        elem.bind('click', function() {
          textarea.select();
        });
      }
    }
  });
