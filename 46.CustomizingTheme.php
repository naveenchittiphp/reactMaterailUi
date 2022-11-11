https://mui.com/material-ui/customization/default-theme/

To create a theme we have to import a create theme function from mui in app.tsx

import { createTheme } from "@mui/material";

before the app function just call a function assing it to a constant.

const theme = createTheme();

this function takes the object as a aurgment 

this object should match the default structure of the theme.

Lets add default theme for the secondary color : 

createTheme({
  pallete:{
  secondary:{
    main:teal[500]
  }
  }
});

Now let say we want to give green 500 to the button then we have to import the teal from the mui/colors 

import { teal } from '@mui/material/colors';

now if we try to use this 

sx={{bgcolor:secondary.main}}

to provide the theme we have to provide the theme for the 

but to apply all these custom themes we have to add the themeProvider and grab all the code to the .


import { createTheme, CssBaseline, ThemeProvider } from "@mui/material";

 <ThemeProvider theme={theme}>
      <CssBaseline />
      <MyLayout />
    </ThemeProvider>

Now theme will automatically applied.

we defined the color for secondary but for secondary.dark we automatically display the dark of green.

https://github.com/mui/material-ui/tree/master/packages/mui-material/src/styles
