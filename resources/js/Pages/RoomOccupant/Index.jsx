import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, Link } from "@inertiajs/react";
import {
  Card,
  CardContent,
  Table,
  TableBody,
  TableCell,
  TableContainer,
  TableHead,
  TableRow,
  Paper,
  IconButton,
} from "@mui/material";
import EditIcon from "@mui/icons-material/Edit";
import DeleteIcon from "@mui/icons-material/Delete";

export default function Index({ auth, roomOccupants }) {
  return (
    <AuthenticatedLayout
      user={auth.user}
      header={
        <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          Room Occupants
        </h2>
      }
    >
      <Head title="Room Occupants" />

      <Card className="px-6">
        <CardContent>
          <TableContainer component={Paper}>
            <Table>
              <TableHead>
                <TableRow>
                  <TableCell>ID</TableCell>
                  <TableCell>Room ID</TableCell>
                  <TableCell>Occupant ID</TableCell>
                  <TableCell>Entry Date</TableCell>
                  <TableCell>Exit Date</TableCell>
                  <TableCell>Actions</TableCell>
                </TableRow>
              </TableHead>
              <TableBody>
                {roomOccupants.data.map((roomOccupant) => (
                  <TableRow key={roomOccupant.id}>
                    <TableCell>{roomOccupant.id}</TableCell>
                    <TableCell>{roomOccupant.room_id}</TableCell>
                    <TableCell>{roomOccupant.occupant_id}</TableCell>
                    <TableCell>{roomOccupant.entry_date}</TableCell>
                    <TableCell>{roomOccupant.exit_date}</TableCell>
                    <TableCell>
                      <Link href={route("room-occupant.edit", roomOccupant.id)}>
                        <IconButton>
                          <EditIcon />
                        </IconButton>
                      </Link>
                      <Link
                        href={route("room-occupant.destroy", roomOccupant.id)}
                      >
                        <IconButton>
                          <DeleteIcon />
                        </IconButton>
                      </Link>
                    </TableCell>
                  </TableRow>
                ))}
              </TableBody>
            </Table>
          </TableContainer>
        </CardContent>
      </Card>
    </AuthenticatedLayout>
  );
}
