<!doctype html>
<html lang="en-US">
<!--TODO: use config's global variables to make paths more relative -->
<?php include 'resources/config.php' ?>
<?php include 'resources/layout/head.php' ?>

<body>

<?php include 'resources/layout/nav.php' ?>


<main class="container py-5">

    <nav class="bg-transparent" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-dark" href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Attractions</li>
        </ol>
    </nav>

    <h2 class="display-4 pt-5 pb-3 text-center">Tours</h2>

    <div class="card-columns">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">National Mall Day Shuttle</h5>
                <h6 class="card-subtitle mb-2 text-muted">Thursday, May 5, 10:00am-4:00pm <br>Saturday, May 7, 10:00am-4:00pm<br>Price: $19.00<br>TRANSPORTATION ONLY<br> Descrption:</h6>
                <p class="card-text">Departing from the Washington Hilton on the hour and the National Mall on the half-hour. Participants may come and go using the shuttle during the day.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Whirlwind Tour of Our Nation's Capital</h5>
                <h6 class="card-subtitle mb-2 text-muted">Wednesday, May 4, 8:00am-12:00pm<br>Friday, May 6, 8:00am-12:00pm<br>Price: $47.00<br>Transportation provided.<br>Description:</h6>
                <p class="card-text">Become a part of our nation's most historic landscape and feel history come to life as you "visit" some of our country's most beloved sites. As the tour makes its way to Capitol Hill, you'll follow a routew that affords splended views of the monuments and famous sites along the Potomac River. <br>See: U.S. Capitol Building, Senate and House office buildings, Smithsonian Museums, Holocaust Memorial Museum, the Bureau of Engraving and Printing, World War II Memorial, the White House and the Washington Monument.<br>Visit: Lincoln Memorial, Vietnam Veterans Memorial, Korean War Veterans Memorial, and the Franklin Delano Roosevelt Memorial.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">America's First Home: Mt. Vernon</h5>
                <h6 class="card-subtitle mb-2 text-muted">Wednesday, May 4, 9:00am-1:00pm<br>Friday, May 6, 12:00pm-4:00pm<br>Saturday, May 7, 12:00pm-4:00pm<br>Price: $64.00<br>Transportation provided.<br>Descrption:</h6>
                <p class="card-text">Travel back in time to the eighteenth century--to the life and times of the father of our country, George Washington. A motor coach will take you over the Potomac River to Mount Vernon Estate, Americals most visited historic house.<br>Visit: Ford Orientation Center, Donald W. Reynolds Mueseum, Washington's home, outbuildings, plantation gardens, and Washington's tomb.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Internation Spy Museum</h5>
                <h6 class="card-subtitle mb-2 text-muted">Wednesday, May 4, 10:00am-2:00pm<br>Price: $71.00<br>Transportation provided.<br> Descrption:</h6>
                <p class="card-text">Through interactive exhibits with state-of-the-art audiovisual effects, film, and hands-on components, the International Spy Museum traces the evolution of espionage through the people who practiced the profession and provides a context for visitors to interperet the role inteligence plays in current events.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">The Halls of Justice: aA Day on Capitol Hill</h5>
                <h6 class="card-subtitle mb-2 text-muted">Thursday, May 5, 10:00am-2:30pm <br>Saturday, May 7, 12:30am-4:30pm<br>Price: $50.00<br>Transportation provided.<br> Descrption:</h6>
                <p class="card-text">This tour will take participants through the U.S. Capitol building. Visit: the Visitor's Center, Emancipation Hall, Capitol Dome, Supreme Court, Great Hall and Court Chamber.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">A Tribute to Our Nation's Heroes</h5>
                <h6 class="card-subtitle mb-2 text-muted">Thursday, May 5, 12:30am-5:30pm <br>Saturday, May 7, 8:00am-1:00pm<br>Price: $62.00<br>Transportation provided.<br> Descrption:</h6>
                <p class="card-text">This tour begins with a stop at Arlington National Cemetary. Next, view the poweful Eternal Flame. The tour continues on to The Tomb of the Unknowns.<br>Next you will see the United States Marine Memorial. From there guests will board the bus and head to the Air Force Memorial also location in Arlington, and finally the National World War II Memorial.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Moonuments by Moonlight</h5>
                <h6 class="card-subtitle mb-2 text-muted">Tuesday, May 3, 8:00pm-11:00pm <br>Thursday, May 5, 8:00am-11:00pm<br>Friday, May 6, 8:00pm-11:00pm<br>Price: $48.00
                    <br>Transportation provided.<br> Descrption:</h6>
                <p class="card-text">It's first class treatment as you board our luxury motor coach for a moonlit tour of our capital city. Throughout your drive, an expert CSI tour guide will regale you with tales of trivia of the nation's capital.<br>See: Lafayette Square (the White House), National Mall, and Capitol Hill.<br>Visit: Lincoln Memorial, Korean War Memorial, Vietnam War Memorial, and the National World War II Memorial.</p>
            </div>
        </div>
    </div>

</main>

<?php include 'resources/layout/scripts.php' ?>
<?php include 'resources/layout/footer.php' ?>
</body>
</html>
