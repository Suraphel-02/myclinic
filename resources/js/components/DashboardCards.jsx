import React from 'react';
import { Card, CardContent, Typography, Grid } from '@mui/material';

const DashboardCards = () => {
  return (
    <Grid container spacing={3}>
      <Grid item xs={12} sm={6} md={4}>
        <Card>
          <CardContent>
            <Typography color="textSecondary" gutterBottom>
              Total Patients
            </Typography>
            <Typography variant="h5" component="div">
              1,234
            </Typography>
          </CardContent>
        </Card>
      </Grid>
      <Grid item xs={12} sm={6} md={4}>
        <Card>
          <CardContent>
            <Typography color="textSecondary" gutterBottom>
              Upcoming Appointments
            </Typography>
            <Typography variant="h5" component="div">
              56
            </Typography>
          </CardContent>
        </Card>
      </Grid>
      <Grid item xs={12} sm={6} md={4}>
        <Card>
          <CardContent>
            <Typography color="textSecondary" gutterBottom>
              Earnings Summary
            </Typography>
            <Typography variant="h5" component="div">
              $12,345.67
            </Typography>
          </CardContent>
        </Card>
      </Grid>
    </Grid>
  );
};

export default DashboardCards;