Buttons:
---------

To use the buttons we have to import the button 

Buttons we have three varians 
1)Text Varient
  <Button variant="text">Text</Button>
for this we have to specify prop with 
The text variant is used if we want to get less attention in ui.
Ex: In card footer and a confirmation popup.
2)Contained
 <Button variant="contained">Contained</Button>
Contained is used to grab user attention and for primary actions in our applications.
ex: register or login button.
3)Outlined

 <Button variant="outlined">Contained</Button>
Outlined varient is in between the text and contained to grab the userattention.
It is used for secondary actions in our application.
ex: Cancel or go back buttons


Now import Stack from materail ui.

We can use the links in text type button 
 <Button variant="text" href="https://example.com">Text</Button>

Button Colors:
=============
https://mui.com/material-ui/customization/palette/#palette-colors

There are mainly six categories of colors.
1)primary - main , light and dark.
2)Secondary 

for each we have sub colors

 <Button variant="contained" color="primary">Primary</Button>
        <Button variant="contained" color="secondary">Secondary</Button>
        <Button variant="contained" color="error">Error</Button>
        <Button variant="contained" color="warning">Warning</Button>
        <Button variant="contained" color="info">Info</Button>
        <Button variant="contained" color="success">Success</Button>

for this we have to add attribute color and specify value.

Sizes:
====
<Button variant="contained" size="small" >Small</Button>
        <Button variant="contained" size="medium">Medium</Button>
        <Button variant="contained" size="large">Large</Button>

Icons:
======
we have to install the icons by npm 

npm install @mui/icons-material

we can place the icon at the start and back of text 

 <Button variant="contained" startIcon={<SendIcon/>} >Send</Button>
        <Button variant="contained" endIcon={<SendIcon/>} >Send</Button>

We can only use icon button with out having the text.

We can disable the shadow by "disableElevation"
We can disable repel effect by disableRepple

Props:
--------

Handel click event 

 <Button variant="contained" endIcon={<SendIcon/>} onClick={ () => { alert("Hi") } } >Click On Me</Button>

 <Button variant="contained" startIcon={<SendIcon/>} >Send</Button>
        <Button variant="contained" endIcon={<SendIcon/>} >Send</Button>
