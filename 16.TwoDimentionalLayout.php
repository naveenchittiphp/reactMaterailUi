Grid is used to create a two dimetional and responsive layouts.

Lets create a new compoment 

D:\naveenProjects\ReactProjects\reactmui\src\components\MuiGrid.tsx

The grid component has two variations 
Grid contaier for the parent and grid item for the childern.

 <Grid container my={2}>
            <Grid item sx={boxProperties}><Box>Item 1</Box></Grid>
            <Grid item sx={boxProperties}><Box>Item 2</Box></Grid>
            <Grid item sx={boxProperties}><Box>Item 3</Box></Grid>
            <Grid item sx={boxProperties}><Box>Item 4</Box></Grid>
        </Grid>

we can add vertical margin by my

The grid uses the flex box 
a grid contains 12 columns 
Each items in grid can take up one of more columns of its width 

There are 5 break points corresponding to the device 

xs -> mobile 
sm ->tablate 
md -> desktop 
lg and xl -> for larger monitors 

We can assign intiger values to each break points which indicates how many of 12 avalible columns 
are occupied by each item when view port stisfiles break point constraint 

Sizes :
-----
 <Grid container my={2}>
            <Grid item sx={boxProperties} xs={3}><Box>Item 1</Box></Grid>
            <Grid item sx={boxProperties} xs={9}><Box>Item 2</Box></Grid>
            <Grid item sx={boxProperties} xs={9}><Box>Item 3</Box></Grid>
            <Grid item sx={boxProperties} xs={3}><Box>Item 4</Box></Grid>
        </Grid>
we can define different sizes at a time 

If we want equal width for all childerns we can use auto layout just define the break point and doesnot give any value.

 <Grid container my={2}>
            <Grid item xs><Box>Item 1</Box></Grid>
            <Grid item xs><Box>Item 2</Box></Grid>
            <Grid item xs><Box>Item 3</Box></Grid>
            <Grid item xs><Box>Item 4</Box></Grid>
        </Grid>
if we assing 6 columns to the second element the remaining elements will taks avalible space equally.

<Grid container my={2}>
            <Grid item xs><Box>Item 1</Box></Grid>
            <Grid item xs={6}><Box>Item 2</Box></Grid>
            <Grid item xs><Box>Item 3</Box></Grid>
            <Grid item xs><Box>Item 4</Box></Grid>
        </Grid>

we can also define the xs= "auto" so the widht of the element will depends up on the natural size of the element.

Spacing :
--------
we can add a spacing property by "spacing" property 
  <Grid container my={2} spacing={2}>
            <Grid item sx={boxProperties} xs={12} sm={6}><Box>Item 1</Box></Grid>
            <Grid item sx={boxProperties} xs={12} sm={6}><Box>Item 2</Box></Grid>
            <Grid item sx={boxProperties} xs={12} sm={6}><Box>Item 3</Box></Grid>
            <Grid item sx={boxProperties} xs={12} sm={6}><Box>Item 4</Box></Grid>
        </Grid>

