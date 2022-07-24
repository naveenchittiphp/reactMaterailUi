The card component will always takes up the parents witdt.

Create a new file for card 

import { Box, Card, CardContent, Typography } from "@mui/material";

export default function MuiCard(){
    return (<>
    <Box width="250px">
    <Card >
        <CardContent>
            <Typography gutterBottom variant="h5" component="div">
                This is card
            </Typography>
        </CardContent>
    </Card>
    </Box>
    </>);
}

all the content will go to the cardContent.

Actions:
--------

we can add the actions links by using the 

<CardActions>
            <Button size="small">Share</Button>
            <Button size="small">Learn More</Button>
        </CardActions>

Media:
------
we can add image to the card by using the card media 

<CardMedia component="img"
            
            image="https://source.unsplash.com/random"
            alt="image"
        >
  
