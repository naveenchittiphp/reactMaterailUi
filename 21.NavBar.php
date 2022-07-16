For Navigation we have to use two components app bar and navbar.

https://mui.com/material-ui/react-app-bar/#main-content

Lets create a nav bar with logo and navigaton links.

For the logo lets go assume we ar going to build a webiste called pokiman.

Now we have to import the pokiman icon from materail ui.

Adding Icon:
-----------
Within the toolbar we have to invoke the icons 

  <IconButton size="large" edge="start" color="inherit" aria-label="logo">
                <CatchingPokemon/>
            </IconButton>

Add site title 
--------------
 <Typography variant="h6" component ="h6">POKIMANAPP</Typography>


D:\naveenProjects\ReactProjects\reactmui\src\components\MuiNavbar.tsx
----------------------------------------------------------------------

import { CatchingPokemon } from "@mui/icons-material";
import { AppBar, Button, IconButton, Stack, Toolbar, Typography } from "@mui/material";

export default function MuiNavbar(){
    return (<>
   <AppBar position="static">
        <Toolbar>
            <IconButton size="large" edge="start" color="inherit" aria-label="logo">
                <CatchingPokemon/>
            </IconButton>
            <Typography variant="h6" component ="h6" sx={{flexGrow:1}}>POKIMANAPP</Typography>
            <Stack direction="row" spacing={2}>
                <Button color="inherit" >Buttons</Button>
            </Stack>
        </Toolbar>
   </AppBar>
    </>)
}
