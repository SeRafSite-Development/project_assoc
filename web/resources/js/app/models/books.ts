import $ = require('jquery');

export class Books
{
	private booksList:Array<any>;

	constructor() {
		this.booksList = [{
			id: 1,
			name: 'Limes Infer',
			description: 'opis',
			author: 'Sebastian'
		},{
			id: 2,
			name: 'Inna ksiazka',
			description: 'opis',
			author: 'Sebastian'
		},{
			id: 3,
			name: 'Po polsku mówiąc',
			description: 'opis',
			author: 'Sebastian'
		},{
			id: 4,
			name: 'Apostrofa',
			description: 'opis',
			author: 'Sebastian'
		}];
	}

	public getData(successFunction: (data: any) => void):void {
		var request = $.ajax({
			type: "GET",
			url: '/books',
			data: {},
			dataType: "json"
		});

		request.done(successFunction);
	}
}