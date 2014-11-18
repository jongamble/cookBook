// app/models/recipe.js
// load the things we need
var mongoose = require('mongoose');

// define the schema for our user model
var recipeSchema = mongoose.Schema({
	creatorID: mongoose.Schema.Types.ObjectId,
	name: String,
	description: String,
	cuisineType: String,
	rating: String,
	difficulty: String,
	cookTime: String,
	prepTime: String,
	flagPrivate:{ type: Boolean, default: false},
	ingredientList: [String],
	toolsList: [String],
	stepsList: [String],
	picturesList: [String],
	ratingsList: [mongoose.Schema.Types.ObjectId],
	commentsList: [mongoose.Schema.Types.ObjectId],
	createDate: { type: Date, default: Date.now }
});

// methods ======================

// create the model for users and expose it to our app
module.exports = mongoose.model('Recipe', recipeSchema);