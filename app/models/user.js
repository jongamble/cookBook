// app/models/user.js
// load the things we need
var mongoose = require('mongoose');
var bcrypt   = require('bcrypt-nodejs');

// define the schema for our user model
var userSchema = mongoose.Schema({
    name: String,
    email: String,
    flagActive: Boolean,
    blogURL: String,
    urlSlug: String,
    avatar: String,
    local            : {
        email       : String,
        password     : String,
    },
    myFavorites: [mongoose.Schema.Types.ObjectId],
    myRecipes: [mongoose.Schema.Types.ObjectId]

});

// methods ======================
// generating a hash
userSchema.methods.generateHash = function(password) {
    return bcrypt.hashSync(password, bcrypt.genSaltSync(8), null);
};

// checking if password is valid
userSchema.methods.validPassword = function(password) {
    return bcrypt.compareSync(password, this.local.password);
};

// create the model for users and expose it to our app
module.exports = mongoose.model('User', userSchema);