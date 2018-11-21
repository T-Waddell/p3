## P3 Peer Review

+ Reviewer's name: Tara W.
+ Reviwee's name: Sandra A.
+ URL to Reviewee's P3 Github Repo URL: *<https://github.com/SandiAnderson/p3>*

## 1. Interface
* You built two applications in one! The site is clear and easy to navigate, and the form results stand out well. You've included concise instructions that make it easy to understand. I found the names Estimator and Planner less intuitive. You could add more detail, such as Race Time Estimator and Weekly Improvement Plan.
* I loved that the time I entered in the Estimator persisted through to the Planner! 
* To improve the interface, you could signal which of the two tools we are currently using by removing the link underline in the nav bar or changing the color, etc. You could also tell the user how many weeks they have until their race. From a content perspective, don't sell yourself short. On your home page you don't need to say "There's not much here now." You've built a functioning application. If you plan to add more features, you can let the user know that more functionality will be coming soon.

## 2. Functional testing
* I found a bug when using the Planner tool. I used multiple race dates, and none displayed in the results, creating a gap in the second sentence.
* The pace fields did not let me even enter non-numeric characters into them, preventing errors.
* I removed my entry in the Seconds field and, while the app displayed an error message that the field was required, it persisted the old value back into the field instead of leaving it empty. Further testing revealed that the Current Mile Pace fields both did this, but the Target Mile Pace fields behaved correctly. This also occurred on the Estimator page.
* I purposely tried a variety of dates that I thought would throw errors in the Planner, and they all resulted in an error message as expected, from the field being required, that just the year or that text was not a valid date, and that the date had to be at least a week in the future. Great job thinking of these scenarios.
* The Estimator fields, except for the Pace fields already mentioned above, did not allow any entering of data, only selections. Errors were displayed as expected when these fields were left blank.
* Using a bogus URL took me back to the Home page. I actually found this a little confusing.

## 3. Code: Routes
The only code in the (`routes/web.php`) file that should be happening in a Controller is the `Route::fallback` code. See the example at the top of this [Laravel release article](https://laravel-news.com/laravel-v5-5-5).

## 4. Code: Views
* Nice job using template inheritance and separation of concerns, however for consistency you could have put your `header.blade.php` file in the modules folder. I didn't see any non-display specific logic in the view files. Blade was used for the PHP content in the view files, and I didn't see anything that I was unfamiliar with. 
* You repeated the code to create the links to each of your tools in your `header.blade.php` file and `welcome.blade.php` file. You could make a nav module to contain this code.
* To follow HTML best practices, your instructions on each tool page shouldn't be in an `<h4>` tag. They should be in an `<h2>` tag (since `<h1>` is already used in your header) or a `<p>` tag, and CSS styling should be used to adjust the size and weight.

## 5. Code: General
* I didn't notice any code style inconsistencies or any best practices that weren't addressed other than the minor things mentioned above.
* You could use more comments overall throughout your code. This is all very fresh to us from building our applications, but if I looked at this months from now it would be harder to follow.
* I loved that the date had to be a future date. If I could go back, I'd add that validation to my own application.

## 6. Misc
Overall, I thought this application was well done and showed an understanding of the course material.