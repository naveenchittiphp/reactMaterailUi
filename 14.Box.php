Create a new file in component folder.

Box is a replacement of the div tag.

Default compoenent is div tage we can also specify the other tags also.

We can use other tags like div , span directly insted of box but the 
box will accept a special property called 'sx' which can be used to accept the custom style that access the theme.

D:\naveenProjects\ReactProjects\reactmui\src\components\MuiBox.tsx
-------------------------------------------------------------------

import { Box } from "@mui/material";

export default function MuiBox(){
    return (<>
    <Box >My Box</Box>
   
    </>);
}

Box Component :
---------------
   <Box >My Box</Box>

Other html components:
----------------------
 <Box component="span">My Box</Box>

Adding Syles:
-------------
    <Box sx={{
        backgroundColor:"primary.main",
        color:"white",
        height:"200px",
        width:"200px",
        padding:"2px",
        '&:hover':{
            backgroundColor:"primary.light"
        }
        }}>My Box</Box>

The sx property doesnot apply on the other html elements.

Add direct styles:
---------------
 <Box display="flex" height="100px" width="100px">My Box</Box>

by this we can apply all mui style elements on Box as tag.

some of the properties have short names also 

 <Box display="flex" height="100px" width="100px" bgcolor="success.light">My Box</Box>

Padding:
--------
padding is defined by p 

 <Box display="flex" height="100px" width="100px" bgcolor="success.light" p={2}>My Box</Box>
here by default p = 8px and we are mentioning 2 so we are multplying the 8 so the final padding is 16px.

