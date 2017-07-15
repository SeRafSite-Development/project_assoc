define(["require", "exports", "jquery"], function (require, exports, $) {
    "use strict";
    var Books = (function () {
        function Books() {
            this.booksList = [{
                    id: 1,
                    name: 'Limes Infer',
                    description: 'opis',
                    author: 'Sebastian'
                }, {
                    id: 2,
                    name: 'Inna ksiazka',
                    description: 'opis',
                    author: 'Sebastian'
                }, {
                    id: 3,
                    name: 'Po polsku mówiąc',
                    description: 'opis',
                    author: 'Sebastian'
                }, {
                    id: 4,
                    name: 'Apostrofa',
                    description: 'opis',
                    author: 'Sebastian'
                }];
        }
        Books.prototype.getData = function (successFunction) {
            var request = $.ajax({
                type: "GET",
                url: '/books',
                data: {},
                dataType: "json"
            });
            request.done(successFunction);
        };
        return Books;
    }());
    exports.Books = Books;
});
