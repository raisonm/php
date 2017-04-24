<?php

require_once('./autoloader.php');
require_once('./router_utility.php');

// echo '<script src="ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>';
// echo '<script type="text/javascript" src="../js/custom_box_js.php"></script>';

/** 
The format I'm going for here is something like:
Page:
box:
	<style>:
	action:
	box:
		<style>:
		action:
	xob:
xob

ideally will read something like:

box:
	login_page: # (as the style)
	action:none:
	box:
		username_input:
		action: submit_username:
	xob:
	box:
		password_input:
		action: submit_password:
	xob:
xob
================================================================================
Interaction between software and humans: Boxes.

It is important here to remember something though. Often objects can be used for many different things. Even the most primative objects can be used for many different tasks and it is more dependent on the descretion of the user of the object than the object it self, what action the object is using.

Take for example, though it digresses away from coding, a brick. A brick is used as a descrete block of matter to construct other objects. it doesn't necessarilly have a definite adjenda to its existence as even when using a brick for the intended use of building up through stacking it together with other bricks, what you end up forming is still a matter left to the descression of the one weilding the brick.

Let's imagine we did have this item represented as code though. our object Brick would have an action we could do with it (the grammer "with it" or even "by means of the brick" is important here as to who is imposing the action), call the action "stack". Is that all we should be able to do with our brick though? Well in my opinion thats a matter of what we would like to make with our brick or bricks. We could leave it at that and stack all of our bricks together and make some walls of various size. If we allowed ourselves to also rotate the brick, add it as an action we may perform, we could put our walls end to end. Nowe we have a small enclosure made out of brick. Depending on how we're melding our bricks together we may even be able to construct a sort of roof I'm sure. But I'll leave that up to a carpenter to decide.

The point is we're the ones imposing these actions on the brick, the brick doesn't know how to relate to other bricks beyond that of purely physical laws. I.E. if a brick hit another brick the first brick would have properties inherent in itself that would then come into play. It would sort of know how to behave in response. It would sustain some stress, it may chip appart a little bit, and it would bounce off. In fact this is probably be how a brick would interact with most things if one threw the brick at a thing. But the action of throwing is our imposition. That is our property. Therefore with this I would say that the point of an object oriented design for a thing should be a sort of ontology of how that thing knows to interact, on almost a physical level, with any other thing.

Using this codebase as an example we can say that our brick is a box, and furthermore that our universe is effectively made up of just boxes or not-boxes (an abcense of a box. the void into which a box loses its sense of being). This is the universe of our webpage, specifically the client side. Currently I've only defined how boxes interact with other boxes. This is fine for now as the only thing in our universe is boxes so we shouldn't run into any hiccups. boxes interact with other boxes my smooshing the second box inside the first box. Excellent! So we know that if we throw a box at another box our  box will either absorb that second box or be absorbed by that second box.

Now what actions can we do on them? It's probably important to remind ourselves here that...when we use a brick to do something it never stops being a brick, unless you smash it to pieces. In a similar fashion we should remember that whatever action we perform on our box it will never not be a box unless we make it a not-box. But as we're effectively continually creating and destroying our universe (on page load), we'll asume that if there is a not-box there was just...never a box there. And furthermore conservation of box holds in whatever new universe we happen to have loaded. (I should go more on this for custom pages...)

In relation to Javascript specifically any action we impose on a box should be an action we may try but we may fail at. It is OUR action, not the box's action. Think of it this way. We can try to use a brick to slice some bread, we'll probably fail, but it's at our descresion. We should know that if we really want to cut a slice of bread that a brick is not the best choice and we shouldn't use that action. However we are not kept from trying to use a brick like that if we really really wanted to.
================================================================================
Interactions between software objects: Boxes and data sources.

...Now we must consider other objects within our universe. If bricks were only interacting with other bricks the utility would be very limited. We could build the structure of a building but we wouldn't be able to funrish it with anything or provide insulation. Let me pose the question of interaction within the same scope we've developed so far though.

If we say we have a brick and we take this brick and force it against another thing within our field/universe (another brick), then we have an interaction between elements within the system. We impose the interaction. That is our doing. To determine what the interaction looked like is silly, we put it into play in the first place and we would simply be dancing around questions we already have the answer to. What we intend to practice is called computer science for a reason...

I'm digressing though. Let me get back to the brick. We enact the a brick against another brick. What happens?
Our brick probably sustains some damage, a little bit chips off and a not-brick is formed. We only know that those chips are not-bricks because we know they aren't bricks. We know they aren't bricks because they do not fit our understanding of what a brick IS...This creates a problem for us. Since our initial brick must have these small bits now missing from it how is it still a brick? We again it would be because we have a cognizant understanding of what a "brick" is in this universe. The new, slightly chipped brick is still a brick until it is not a brick. This implies something that I should later rigorously prove:

For any finite understanding of a given universe there is a limit to the transformations possible of any individual element of that universe. Once that limit is reached then the transformed object no longer resembles anything in our understanding and we will have to develope a new understanding of our universe. And these understood objects and be anything we are capable of concieving. When the concieved thing is transformed enough it must eventually reach a point where the object does not match the initial conception.

What this means for an object oriented program is that there can only be so many interactions until our brick (box) stops being a brick (box). We can consolidate these elements be lumping them into an ambiguous void of not-bricks or not-boxes, or more generally not-matter. When things become not-matter we will generally refran from referencing them any longer until a new object can be formed from them.



Now applying this our boxes. Our boxes will need to have a state. they cannot be purely asthetic things and by the development of them they have nothing to do with the asthetic. the div wrapping them is mearly consequential of them existing in our universe (the webpage). This can be seen as an overarching property inherent of the boxes, which are physical objects within the context of the page. Physical objects unequivically have some sense of position in the universe, whatever liberal sense of position may be derived the point is that a box can be found if you tailor your perspective to view it. much like air is invisible but we may see its effects we can see the effects of boxes as transparent tables ect. We may not be able to see them but they have some sense of position within the universe that is in a sense measurable by the preciever.

So position is an attribute of a box. this attribute is represented by the div tag. Now lets talk about other attributes. There's bound to be some sort of information related to any box. A brick has matter and a measurable density. It also has a material. Apply the same understanding to the box. The box will have density, it will be made up of a type of "matter". We will call this matter "data". We will additionally call any recorded understanding of the box as a "state".
This might develope the idea of different types of data but I'll leave that for when it's needed...

Now we have our boxes and they can interact with other boxes and we can measure the change in their states.
Wonderful.
Now we can start developing a few new objects within our world. In the interest in keep the number of objects down let devise an abstracted object that provides information from third party sources. A sort of collection of all other known elemnts. This may make more sense if we think of the webpage univers as a cunstructed isolated universe that we're trying to merge into our own. Naturally we'd like to see of objects within this new universe react with objects of our universe and so we carefully introduce a component of our universe into the webpage universe. Thus this new object is simply a catalyst allowing the interaction between the webpage world and our own world. An injection of reality into a conceptualized universe. Let us call this injection "data". The base line of the boxes data will be considered as nothing. a null space. thus is something new propogates within the box's data we know there was a reaction to some stimulus.

Thus that statof Box before Box(Data) and after should theoretically be different. Once we've injected something into the box it becomes a sample. We shouldn't use it for any new "tests" as it were because it's already having a reaction to outside stimuli and the test wouldn't be a clean test.

expect Box(data) to behave potentially differently than Box(Box()).



**/
// echo $_SERVER['PATH_INFO'];
// exit();
// echo $_SERVER['PATH_INFO'];

// echo preg_replace('/\//', '\\', $_SERVER['PATH_INFO']);
// exit();

run_endpoint($_SERVER['PATH_INFO']);

// echo '<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>';
// echo '<script type="text/javascript" src="../js/custom_box_js.php"></script>';
// include_once('../js/custom_box_js.php');

?>