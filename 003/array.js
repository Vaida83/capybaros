console.log('Welcome to Nigthmare!');

 movies = [
    {'title': 'Terminator', 'year' : 1984, 'rating' : 8.0},
    {'title': 'Commando', 'year' : 1985, 'rating' : 6.7},
    {'title': 'Predator', 'year' : 1987, 'rating' : 7.9},
    {'title': 'Total Recall', 'year' : 1990, 'rating' : 7.5},
    {'title': 'Terminator 2', 'year' : 1991, 'rating' : 8.5},
    {'title': 'True Lies', 'year' : 1994, 'rating' : 7.2}
];
const allRatingsSum = movies.reduce((sum, movie) => + movie.rating, 0);

const maxRating = movies.reduce((max, movie) => movie.rtaing > max ? movie.rating : max, 0);

const averageRating = movies.reduce((sum, movie, index, array) => {
    sum += movie.rating;
    if (index === array.length - 1) {
        return sum / array.length;
    } else {
        return sum;
    }
}
, 0);
console.log(allRatingsSum, maxRating, averageRating);

movies.sort((a, b) => a.rating - b.rating);

//movies.sort((a, b) => {
//    if(a.litle < b.title) {
//        return -1;
//    }
//    if (b.title < a.title) {
//        return 1;
//    }
//    return 0;
//});

movies.sort((a, b) => b.title.localeCompare(a.title));

console.log(movies);

movies1 = [
    {'title': 'Terminator', 'year': 1984, 'rating': 8.0},
    {'title': 'Commando', 'year': 1984, 'rating': 6.7},
    {'title': 'Predator', 'year': 1987, 'rating': 7.9},
    {'title': 'Total Recall', 'year': 1991, 'rating': 7.5},
    {'title': 'Terminator 2: Judgment Day', 'year': 1991, 'rating': 8.5},
    {'title': 'True Lies', 'year': 1984, 'rating': 7.2}
];
movies1.sort((a, b) => {
    if(a.year < b.year) {
        return -1;
        }
    if (b.year < a.year) {
        return 1;
    }
    if(a.rating < b.rating) {
        return -1;
        }
    if (b.rating < a.rating) {
        return 1;
    }
   return 0;
});

console.log(movies1);