Drawer component is used to create a side bar.
It containes links to other pages to app 

Create a new page :

D:\naveenProjects\ReactProjects\reactmui\src\components\MuiDrawer.tsx
----------------------------------------------------------------------

import { Drawer } from "@mui/material";

export default function MuiDrawer(){
    return (<>
        <Drawer ></Drawer>
    </>);
}

Anchor :
--------
 we can define in which direction sidebar opens.

import { Box, Drawer, Typography } from "@mui/material";

export default function MuiDrawer(){
    return (<>
        <Drawer anchor="left">
            <Box p={2} width="250px" textAlign="center" role="presentation">
                <Typography variant="h6" component="div">Side Pannel</Typography>
            </Box>
        </Drawer>
    </>);
}

to open and close the drawer we need a state varible

Control Drawer:
--------------
open -> we have to pass the true value to "open" property to open drawer.

onClose -> we have to set value to false when click on close drawer button then only drawer can be closed.
