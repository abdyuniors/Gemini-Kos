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
import { ROOM_STATUS_TEXT_MAP, ROOM_STATUS_CLASS_MAP } from "@/constant";

export default function Index({ auth, rooms }) {
  return (
    <AuthenticatedLayout
      user={auth.user}
      header={
        <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          Rooms
        </h2>
      }
    >
      <Head title="Rooms" />

      <Card className="px-6">
        <CardContent>
          <TableContainer component={Paper}>
            <Table>
              <TableHead>
                <TableRow>
                  <TableCell>ID</TableCell>
                  <TableCell>Facilities</TableCell>
                  <TableCell>Price</TableCell>
                  <TableCell>Status</TableCell>
                  <TableCell>Actions</TableCell>
                </TableRow>
              </TableHead>
              <TableBody>
                {rooms.data.map((room) => (
                  <TableRow key={room.id}>
                    <TableCell>{room.id}</TableCell>
                    <TableCell>{room.facilities}</TableCell>
                    <TableCell>{room.price}</TableCell>
                    <TableCell>
                      <span
                        className={
                          "px-2 py-1 rounded " +
                          ROOM_STATUS_CLASS_MAP[room.status]
                        }
                      >
                        {ROOM_STATUS_TEXT_MAP[room.status]}
                      </span>
                    </TableCell>
                    <TableCell>
                      <Link href={route("room.edit", room.id)}>
                        <IconButton>
                          <EditIcon />
                        </IconButton>
                      </Link>
                      <Link href={route("room.destroy", room.id)}>
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
