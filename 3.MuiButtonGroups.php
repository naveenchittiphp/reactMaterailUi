Button Group :
-------------
Button group is used to group the buttons.

Lets add another 3 stacks for buttons.

 <Stack  direction="row">
        <Button variant="contained"  >Left</Button>
        <Button variant="contained"  >Center</Button>
        <Button variant="contained"  >Right</Button>
        </Stack>

we can define a group of buttons like this.
But this does not looks great.

So we will use button groups.

contained:
-----------
<Stack  direction="row">
            <ButtonGroup variant="contained">
                <Button   >Left</Button>
                <Button >Center</Button>
                <Button >Right</Button>
            </ButtonGroup>
        </Stack>

we have to remove the variant for all inner buttons and add variant to the buttongroup.

We also have another varient called outlined.

outlined:
---------
  <ButtonGroup variant="outlined">
                <Button   >Left</Button>
                <Button >Center</Button>
                <Button >Right</Button>
            </ButtonGroup>
text:
----

<ButtonGroup variant="text">
                <Button   >Left</Button>
                <Button >Center</Button>
                <Button >Right</Button>
            </ButtonGroup>

Align buttons vertically:
---------------------------

We can arrange the buttons vertically by usning oriantation.

<ButtonGroup variant="text" orientation="vertical">
                <Button   >Left</Button>
                <Button >Center</Button>
                <Button >Right</Button>
            </ButtonGroup>

Specify size and color:
---------------------
    <ButtonGroup variant="contained" size="small" color="secondary">
                <Button   >Left</Button>
                <Button >Center</Button>
                <Button >Right</Button>
            </ButtonGroup>

onClick 
--------

  <ButtonGroup variant="contained" size="small" color="secondary">
                <Button onClick={ () => alert("Left Alert.")}  >Left</Button>
                <Button  onClick={ () => alert("Center Alert.")} >Center</Button>
                <Button  onClick={ () => alert("Right Alert.")} >Right</Button>
            </ButtonGroup>

Add Aria label:
--------------
aria-aria-label="Button Groups"
