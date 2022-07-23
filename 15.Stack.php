The stack compoment is used to manage the layout in one Dimention.
Either along the vertical or horizantal.

Now create a new file for stack 

D:\naveenProjects\ReactProjects\reactmui\src\components\MuiStack.tsx
--------------------------------------------------------------------

By default the stack element arranges all elements in column.

 <Stack sx={{ border:"1px solid"}} direction="row">
   
-----------
|         |
-----------
-----------
|          |
-----------

   
we can change this by direction 

    <Stack sx={{ border:"1px solid"}} direction="row">
      
----------- ------------
|         | |           |
----------- -------------
      
      We can also change the direction of row by "row-reverse"
      
      Directions:
      ----------
      row , row-reverse , column and column-reverse 
      
      Spacing:
      --------
      
      we can difine the spacing with property "spacing"
      <Stack sx={{ border:"1px solid"}} direction="row" spacing={3}>
        
      Divider:
      --------
       we can use a divider 
         <Stack  divider={ <Divider orientation="vertical" flexItem /> }>
        
        
        import { Box, Divider, Stack } from "@mui/material";

export default function MuiStack(){

    const boxProperties = {
        backgroundColor:"primary.main",
        color:"white",
        height:"200px",
        width:"200px",
        padding:"2px",
        '&:hover':{
            backgroundColor:"primary.light"
        }
        };
    return (<>
    <Stack sx={{ border:"1px solid"}} direction="row" spacing={3} divider={ <Divider orientation="vertical" flexItem /> }>
    <Box sx={boxProperties}>My Box</Box>
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
        <Box sx={boxProperties}>My Box</Box>
            <Box display="flex" height="100px" width="100px">My Box</Box>
            <Box display="flex" height="100px" width="100px" bgcolor="success.light" p={2}>My Box</Box>
    </Stack>
        
        </>);
}
      
