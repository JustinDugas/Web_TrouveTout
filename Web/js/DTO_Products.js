class DTO_Products{

	constructor(){
		this.articles = [];
		this.categories = [];
		this.rabais = [];
		this.users = [];
	}

	getCategories(){
		
		this.categories.push(new Categorie(0, "Shampoing"));
		this.categories.push(new Categorie(1, "Animaux"));
		this.categories.push(new Categorie(2, "Informatique"));
		this.categories.push(new Categorie(3, "Musique"));
		this.categories.push(new Categorie(4, "Nourriture"));

		return this.categories;
	}

	getArticles(id_categorie){
		this.articles.push(new Article(0, 0, 1, "Chien", "Un beau petit chien", 200, 200, 0));
		this.articles.push(new Article(0, 0, 1, "Chat", "Un beau petit Chat", 10, 10, 0));
		this.articles.push(new Article(0, 0, 1, "Dragon", "Un beau petit Dragon", 20000, 20000, 0));
		this.articles.push(new Article(0, 0, 1, "Lapin", "Un beau petit Lapin", 150, 150, 0));
		this.articles.push(new Article(0, 0, 1, "Leviathan", "Un beau petit Leviathan", 150000, 150000, 0));
		this.articles.push(new Article(0, 0, 1, "Justin", "Un beau petit Justin", 13, 13, 0));

		let tabArticlesTemp = [];

		for(let i = 0; i < this.articles.length; i++){
			if(this.articles[i].id_categorie == id_categorie){
				tabArticlesTemp.push(this.articles[i]);
			}
		}

		return tabArticlesTemp;
	}
}